<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('inicio');
    }

    public function lista(){
        $this->load->view('lista');

    }

    public function nueva(){
        $this->load->view('nueva');
    }

    public function borrar($Id=0){
        core_persona::borrar($Id);

        redirect('main/lista');
        
    }

}

/* End of file Main.php */
