<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function index() 
    {
        $this->load->model('M_Aplikasi');
        $data['count1'] = $this->M_Aplikasi->get_count_apk();
        $this->load->model('M_Pusat');
        $data['count2'] = $this->M_Pusat->get_count_pst();
        $this->load->model('M_Kelola');
        $data['count3'] = $this->M_Kelola->get_count_kel();

        $this->load->view('Frontend/Template/header_lain.php');
        $this->load->view('Frontend/index.php',$data);
        $this->load->view('Frontend/Template/footer.php');
        
    }
    
    public function login() 
    {
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/login.php');
        $this->load->view('Frontend/Template/footer.php');
    }

     public function register() 
    {
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/register.php');
        $this->load->view('Frontend/Template/footer.php');
    }
    public function register_action(){
        $user = $this->input->POST('username');
        $pass = $this->input->POST('password');
        $nama = $this->input->POST('nm_customer');
        $email = $this->input->POST('email');
        $nohp = $this->input->POST('nohp');        
        $alamat = $this->input->POST('alamat');

        $data = array(
            'username' => $user,
            'password' => $pass,
            'nm_customer' => $nama,
            'email' => $email,
            'nohp' => $nohp,
            'alamat' => $alamat,
        );

        $this->load->model('M_Customer');
        $this->M_Customer->input_data($data,'tbl_customer');
        redirect('Frontend/login');
    }

    public function dpa() 
    {
        $this->load->model('M_Aplikasi');
        $data['tbl_aplikasi'] = $this->M_Aplikasi->tampil_data()->result();

        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/inventaris/index.php/Frontend/dpa';
        $config['total_rows'] = $this->M_Aplikasi->countAllAplikasi();
        $config['per_page'] = 1;

        $this->pagination->initialize($config);

        $data1['start'] = $this->uri->segment(4);
        $data1['tbl_aplikasi'] = $this->M_Aplikasi->getAplikasi($config['per_page'], $data1['start']);

        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/dpa.php',$data ,$data1);
        $this->load->view('Frontend/Template/footer.php');
    }
    public function dpp() 
    {
        $this->load->model('M_Pusat');
        $data['tbl_pusat'] = $this->M_Pusat->tampil_data()->result();
        if( $this->input->post('keyword') ) {
            $data['tbl_pusat'] = $this->M_Pusat->pencarian();
        }
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/dpp.php',$data);
        $this->load->view('Frontend/Template/footer.php');
    }
    public function dtk() 
    {
        $this->load->model('M_Kelola');
        $data['tbl_kelola'] = $this->M_Kelola->tampil_data()->result();
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/dtk.php',$data);
        $this->load->view('Frontend/Template/footer.php');
    }

    public function contacs() 
    {
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/contacs.php');
        $this->load->view('Frontend/Template/footer.php');
    }

    public function view_dpp($id_pusat) 
        {
        $where = array('id_pusat' => $id_pusat);
        $this->load->model('M_Pusat');
        $data['tbl_pusat'] = $this->M_Pusat->view_data($where,'tbl_pusat')->result();
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/view_dpp.php',$data);
        $this->load->view('Frontend/Template/footer.php');
        }

    public function view_dpa($id_apl) 
        {
        $where = array('id_apl' => $id_apl);
        $this->load->model('M_Aplikasi');
        $data['tbl_aplikasi'] = $this->M_Aplikasi->view_data($where,'tbl_aplikasi')->result();
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/view_dpa.php',$data);
        $this->load->view('Frontend/Template/footer.php');
        }

     public function view_dtk($id_kelola) 
        {
        $where = array('id_kelola' => $id_kelola);
        $this->load->model('M_Kelola');
        $data['tbl_kelola'] = $this->M_Kelola->view_data($where,'tbl_kelola')->result();
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/view_dtk.php',$data);
        $this->load->view('Frontend/Template/footer.php');
        }

        public function about() 
        {
        $this->load->view('Frontend/Template/header.php');
        $this->load->view('Frontend/about.php');
        $this->load->view('Frontend/Template/footer.php');
        }


}
