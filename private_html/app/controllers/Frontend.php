<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['TitleForm'] = "Lorem ipsum dolor";
        $this->load->view('home', $data);
    }
}
