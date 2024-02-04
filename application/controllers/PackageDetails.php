<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packagedetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PackageDetailsModel", "model");
    }

    public function index()
    {
        $data = $this->model->getData('uttarakhand');
        $this->load->view('package_details/index.php', array('data' => $data));
    }

    public function getPackageList()
    {
        $data = $this->model->getData($this->input->post('location'));
        $view = $this->load->view('package_details/packages_list.php', array('data' => $data), true);
        
        echo json_encode(array('view' => $view));
    }
}
