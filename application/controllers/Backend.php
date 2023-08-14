<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     if($this->session->userdata('masuk') != TRUE){
    //         $url=base_url;
    //         redirect($url);
    //     }
    // }

    public function index() 
    {
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/index.php');
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_admin()
    {
        $this->load->model('M_Admin');
        $data['tbl_admin'] = $this->M_Admin->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_admin.php', $data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_admin_add(){
        $this->load->model('M_Admin');
        $data['tbl_admin'] = $this->M_Admin->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_admin_add.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_admin_add_aksi(){
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $nm_admin = $this->input->POST('nm_admin');
        $status = $this->input->POST('status');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nm_admin' => $nm_admin,
            'status' => $status,
        );

        $this->load->model('M_Admin');
        $this->M_Admin->input_data($data,'tbl_admin');
        redirect('Backend/data_admin');

    }


    public function data_admin_edit($id_admin){
        $where = array('id_admin' => $id_admin);
        $this->load->model('M_Admin');
        $data['tbl_admin'] = $this->M_Admin->view_data($where,'tbl_admin')->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_admin_edit.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_customer_edit_aksi(){
        $id = $this->input->POST('id_admin');
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $nm_admin = $this->input->POST('nm_admin');
        $status = $this->input->POST('status');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nm_admin' => $nm_admin,
            'status' => $status,
            
        );

         $where = array(
                'id_admin' => $id
            );

        $this->load->model('M_Admin');
        $this->M_Admin->update_data($where,$data,'tbl_admin');
        redirect('Backend/data_admin');

       }

    function data_admin_delete($id_admin){
        $where = array('id_admin' => $id_admin);
        $this->load->model('M_Admin');
        $this->M_Admin->delete_data($where,'tbl_admin');
        redirect('Backend/data_admin');
    }

    public function data_pengembangan_aplikasi()
    {
        $this->load->model('M_Aplikasi');
        $data['tbl_aplikasi'] = $this->M_Aplikasi->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengembangan_aplikasi.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_pengembangan_aplikasi_add(){
        $this->load->model('M_Aplikasi');
        $data['tbl_aplikasi'] = $this->M_Aplikasi->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengembangan_aplikasi_add.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_pengembangan_aplikasi_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'pdf';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_eror());
            redirect('Backend/data_pengembangan_aplikasi_add', $error);
        }
        else{
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $no_surat = $this->input->POST('no_surat');
            $asal = $this->input->POST('asal');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'no_surat' => $no_surat,
                'asal' => $asal,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima
                ,);
            $this->load->model('M_Aplikasi');
            $this->M_Aplikasi->input_data($data, 'tbl_aplikasi');
            redirect('Backend/data_pengembangan_aplikasi');
        }
    }

    public function data_pengembangan_aplikasi_edit($id_apl){
        $where = array('id_apl' => $id_apl);
        $this->load->model('M_Aplikasi');
        $data['tbl_aplikasi'] = $this->M_Aplikasi->view_data($where,'tbl_aplikasi')->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengembangan_aplikasi_edit.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

     public function data_pengembangan_aplikasi_edit_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'jpg|png|gif';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $id = $this->input->POST('id_apl');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $no_surat = $this->input->POST('no_surat');
            $asal = $this->input->POST('asal');
            $jenis = $this->input->POST('jenis');
            $tgl_terima = $this->input->POST('tgl_terima');            

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'no_surat' => $no_surat,
                'asal' => $asal,
                'jenis' => $jenis,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_apl' => $id
            );

            $this->load->model('M_Aplikasi');
            $this->M_Aplikasi->update_data($where,$data, 'tbl_aplikasi');
            redirect('Backend/data_pengembangan_aplikasi');
        }

        else{

            $id = $this->input->POST('id_apl');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');
            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_apl' => $id
            );

            $file = $this->db->get_where('tbl_aplikasi',['id_apl' => $id])->row();
            unlink("./uploads/".$file->berkas);

            $this->load->model('M_Aplikasi');
            $this->M_Aplikasi->update_data($where,$data, 'tbl_aplikasi');
            redirect('Backend/data_pengembangan_aplikasi');

        }

    }

    function data_pengembangan_aplikasi_delete($id_apl){
        $where = array('id_apl' => $id_apl);
        $file = $this->db->get_where('tbl_aplikasi',['id_apl' => $id_apl])->row();
        unlink("./uploads/".$file->berkas);
        $this->load->model('M_Aplikasi');
        $this->M_Aplikasi->delete_data($where,'tbl_aplikasi');
        redirect('Backend/data_pengembangan_aplikasi');
    }

    public function data_tata_kelola()
    {
        $this->load->model('M_Kelola');
        $data['tbl_kelola'] = $this->M_Kelola->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_tata_kelola.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_tata_kelola_add(){
        $this->load->model('M_Kelola');
        $data['tbl_kelola'] = $this->M_Kelola->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_tata_kelola_add.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_tata_kelola_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'pdf';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_eror());
            redirect('Backend/data_tata_kelola_add', $error);
        }
        else{
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima,);
            $this->load->model('M_Kelola');
            $this->M_Kelola->input_data($data, 'tbl_kelola');
            redirect('Backend/data_tata_kelola');
        }
    }

    public function data_tata_kelola_edit($id_kelola){
        $where = array('id_kelola' => $id_kelola);
        $this->load->model('M_Kelola');
        $data['tbl_kelola'] = $this->M_Kelola->view_data($where,'tbl_kelola')->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_tata_kelola_edit.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_tata_kelola_edit_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'jpg|png|gif';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $id = $this->input->POST('id_kelola');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $tgl_terima = $this->input->POST('tgl_terima');            

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_kelola' => $id
            );

            $this->load->model('M_Kelola');
            $this->M_Kelola->update_data($where,$data, 'tbl_kelola');
            redirect('Backend/data_tata_kelola');
        }

        else{

            $id = $this->input->POST('id_kelola');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');
            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_kelola' => $id
            );

            $file = $this->db->get_where('tbl_kelola',['id_kelola' => $id])->row();
            unlink("./uploads/".$file->berkas);

            $this->load->model('M_Kelola');
            $this->M_Kelola->update_data($where,$data, 'tbl_kelola');
            redirect('Backend/data_tata_kelola');

        }

    }

    function data_tata_kelola_delete($id_kelola){
        $where = array('id_kelola' => $id_kelola);
        $file = $this->db->get_where('tbl_kelola',['id_kelola' => $id_kelola])->row();
        unlink("./uploads/".$file->berkas);
        $this->load->model('M_Kelola');
        $this->M_Kelola->delete_data($where,'tbl_kelola');
        redirect('Backend/data_tata_kelola');
    }

    public function data_pengelola_pusat()
    {
        $this->load->model('M_Pusat');
        $data['tbl_pusat'] = $this->M_Pusat->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengelola_pusat.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_pengelola_pusat_add(){
        $this->load->model('M_Pusat');
        $data['tbl_pusat'] = $this->M_Pusat->tampil_data()->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengelola_pusat_add.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_pengelola_pusat_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'pdf';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_eror());
            redirect('Backend/data_pengelola_pusat_add', $error);
        }
        else{
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima
                ,);
            $this->load->model('M_Pusat');
            $this->M_Pusat->input_data($data, 'tbl_pusat');
            redirect('Backend/data_pengelola_pusat');
        }
    }

    public function data_pengelola_pusat_edit($id_pusat){
        $where = array('id_pusat' => $id_pusat);
        $this->load->model('M_Pusat');
        $data['tbl_pusat'] = $this->M_Pusat->view_data($where,'tbl_pusat')->result();
        $this->load->view('Backend/Template/header.php');
        $this->load->view('Backend/data_pengelola_pusat_edit.php',$data);
        $this->load->view('Backend/Template/footer.php');
    }

    public function data_pengelola_pusat_edit_aksi(){
        $config['upload_path']      =  './uploads/';
        $config['allowed_types']    =  'jpg|png|gif';
        $config['max_size']         =  2048;
        $config['ecrypt_name']      =  TRUE;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('berkas')){
            $id = $this->input->POST('id_pusat');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $tgl_terima = $this->input->POST('tgl_terima');            

            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_pusat' => $id
            );

            $this->load->model('M_Pusat');
            $this->M_Pusat->update_data($where,$data, 'tbl_pusat');
            redirect('Backend/data_pengelola_pusat');
        }

        else{

            $id = $this->input->POST('id_pusat');
            $tgl_surat = $this->input->POST('tgl_surat');
            $nm_surat = $this->input->POST('nm_surat');
            $asal = $this->input->POST('asal');
            $no_surat = $this->input->POST('no_surat');
            $jenis = $this->input->POST('jenis');
            $berkas = $this->upload->data('file_name');
            $tgl_terima = $this->input->POST('tgl_terima');
            $data = array(
                'tgl_surat' => $tgl_surat,
                'nm_surat' => $nm_surat,
                'asal' => $asal,
                'no_surat' => $no_surat,
                'jenis' => $jenis,
                'berkas' => $berkas,
                'tgl_terima' => $tgl_terima,
                );

            $where = array(
                'id_pusat' => $id
            );

            $file = $this->db->get_where('tbl_pusat',['id_pusat' => $id])->row();
            unlink("./uploads/".$file->berkas);

            $this->load->model('M_Pusat');
            $this->M_Pusat->update_data($where,$data, 'tbl_pusat');
            redirect('Backend/data_pengelola_pusats');

        }

    }

    function data_pengelola_pusat_delete($id_pusat){
        $where = array('id_pusat' => $id_pusat);
        $file = $this->db->get_where('tbl_pusat',['id_pusat' => $id_pusat])->row();
        unlink("./uploads/".$file->berkas);
        $this->load->model('M_Pusat');
        $this->M_Pusat->delete_data($where,'tbl_pusat');
        redirect('Backend/data_pengelola_pusat');
    }


}
