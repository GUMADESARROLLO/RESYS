<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Marangelo
 * Date: 16/04/2017
 * Time: 12:32 PM
 */
class Usuario_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('canje_model');

    }
    public function index(){
        $this->load->view('header/header');
        $this->load->view('vtsUsuarios/login');
        $this->load->view('footer/footer');
    }
    public function getUsuarios()
    {
        $this->load->view('header/header');
        $this->load->view('header/menu');
        $this->load->view('vtsUsuarios/Usuarios');
        $this->load->view('footer/Copyright');
        $this->load->view('footer/footer');
    }
}
