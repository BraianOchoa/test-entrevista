<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $data['TitleForm'] = "Lorem ipsum dolor";
        $this->load->view('home', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('c_fullname','Nombre y Apellido','required');
        $this->form_validation->set_rules('c_email','Correo Electrónico','required|valid_email');
        $this->form_validation->set_rules('c_telephone','Celular','required|numeric');
        $this->form_validation->set_rules('c_comments','Consulta','required');

        if ($this->form_validation->run() == false) {
            $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => false,
                    'message' => validation_errors(),
                ]));
            return;
        }

        $data = [
            'fullname' => $this->input->post('c_fullname'),
            'email' => $this->input->post('c_email'),
            'telephone' => $this->input->post('c_telephone'),
            'comments' => $this->input->post('c_comments'),
        ];


        if ($this->Contact_model->save_form($data)) {
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => "Se guardaron los datos.",
            ]));
        } else {
            $this->output
            ->set_status_header(500)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Hubo un problema al guardar.'
            ]));
        }
    }
}
