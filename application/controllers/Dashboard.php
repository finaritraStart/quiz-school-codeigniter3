<?php
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('header');
        $this->load->view('layouts/main',$data);
        $this->load->view('footer');
    }
}
