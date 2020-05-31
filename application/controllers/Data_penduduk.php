<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_penduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_penduduk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_penduduk/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_penduduk/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_penduduk/index.html';
            $config['first_url'] = base_url() . 'data_penduduk/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_penduduk_model->total_rows($q);
        $data_penduduk = $this->Data_penduduk_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_penduduk_data' => $data_penduduk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_penduduk/data_penduduk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_penduduk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'NIK' => $row->NIK,
		'no_kk' => $row->no_kk,
		'nama' => $row->nama,
		'jenis_kelamin' => $row->jenis_kelamin,
		'pekerjaan' => $row->pekerjaan,
		'foto' => $row->foto,
		'keterangan_tambahan' => $row->keterangan_tambahan,
	    );
            $this->load->view('data_penduduk/data_penduduk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_penduduk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_penduduk/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'NIK' => set_value('NIK'),
	    'no_kk' => set_value('no_kk'),
	    'nama' => set_value('nama'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'foto' => set_value('foto'),
	    'keterangan_tambahan' => set_value('keterangan_tambahan'),
	);
        $this->load->view('data_penduduk/data_penduduk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

//        	Upload Image

			$target_dir = 'uploads/';
//			$slice=explode('.',$_FILES["fileToUpload"]["name"]);
//			$fakename=md5($slice[0].date("Y/m/d"));
//			$extension=$slice[1];

			$temp = explode(".", $_FILES["fileToUpload"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
//
//			$_FILES["fileToUpload"]["name"]=$fakename.'.'.$fakename;
			$target_file = $target_dir . round(microtime(true)) . '.' . end($temp);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}

// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}

// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". base_url($target_file). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
//			End Upload Image




            $data = array(
		'username' => $this->input->post('username',TRUE),
		'NIK' => $this->input->post('NIK',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'foto' =>  $target_file,
		'keterangan_tambahan' => $this->input->post('keterangan_tambahan',TRUE),
	    );

            $this->Data_penduduk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_penduduk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_penduduk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_penduduk/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'NIK' => set_value('NIK', $row->NIK),
		'no_kk' => set_value('no_kk', $row->no_kk),
		'nama' => set_value('nama', $row->nama),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'foto' => set_value('foto', $row->foto),
		'keterangan_tambahan' => set_value('keterangan_tambahan', $row->keterangan_tambahan),
	    );
            $this->load->view('data_penduduk/data_penduduk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_penduduk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {

			//        	Upload Image

			$target_dir = 'uploads/';
//			$slice=explode('.',$_FILES["fileToUpload"]["name"]);
//			$fakename=md5($slice[0].date("Y/m/d"));
//			$extension=$slice[1];

			$temp = explode(".", $_FILES["fileToUpload"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
//
//			$_FILES["fileToUpload"]["name"]=$fakename.'.'.$fakename;
			$target_file = $target_dir . round(microtime(true)) . '.' . end($temp);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}

// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}

// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". base_url($target_file). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
//			End Upload Image

            $data = array(
		'username' => $this->input->post('username',TRUE),
		'NIK' => $this->input->post('NIK',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'foto' => $target_file,
		'keterangan_tambahan' => $this->input->post('keterangan_tambahan',TRUE),
	    );

            $this->Data_penduduk_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_penduduk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_penduduk_model->get_by_id($id);

        if ($row) {
            $this->Data_penduduk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_penduduk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_penduduk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('NIK', 'nik', 'trim|required');
	$this->form_validation->set_rules('no_kk', 'no kk', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
//	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('keterangan_tambahan', 'keterangan tambahan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_penduduk.php */
/* Location: ./application/controllers/Data_penduduk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-31 04:56:15 */
/* http://harviacode.com */
