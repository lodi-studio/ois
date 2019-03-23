<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Home_model'); // load model 
        $this->load->library('form_validation'); 
    }

    function index()
    {
        $page = new Page();
        
        $data['dispatch'] = $this->Home_model->getPosts();

        $page->title                = 'OIS - Dispatch';
        $page->breadcrumb_active    = 'Dispatch';
        $page->breadcrumb_target    = base_url('home');
        $page->main                 = 'home_view';
        $page->data                 = $data;

        //var_dump($page);

        $this->render($page);
    }
    
    function getArrival()
    {
        $page = new Page();
        
        $data['arrival'] = $this->Home_model->getArrivalPosts();

        $page->title                = 'OIS - Arrival';
        $page->breadcrumb_active    = 'Arrival';
        $page->breadcrumb_target    = base_url('home');
        $page->main                 = 'homearrival_view';
        $page->data                 = $data;

        //var_dump($page);

        $this->render($page);
    }

    function create()
    {
        $page = new Page();
        
        $page->title                = 'OIS - Dispatch';
        $page->breadcrumb_active    = 'Dispatch';
        $page->breadcrumb_target    = base_url('home');
        $page->main                 = 'create_view';

        //var_dump($page);

        $this->render($page);
    }
    
    function arrival()
    {
        $page = new Page();
        
        $page->title                = 'OIS - Arrival';
        $page->breadcrumb_active    = 'Arrival';
        $page->breadcrumb_target    = base_url('home');
        $page->main                 = 'arrival_view';

        //var_dump($page);

        $this->render($page);
    }
    public function create_post()
    {

    $dispatcher = $this->session->username;
    $terminal = 'Cabanatuan';
    $bound = 'Dispatch';
    $dispatch_date = $this->input->post(mdate('%Y-%m-%d', now()));
    $bus_no = $this->input->post('bus_no');
    $dispatch_time = $this->input->post(mdate('%H:%i:%s', now()));
    $bus_route = $this->input->post('bus_route');
    $bus_driver = $this->input->post('bus_driver');
    $bus_conductor = $this->input->post('bus_conductor');
    $or_no = $this->input->post('or_no');
    $no_of_pass = $this->input->post('no_of_pass');

    $res = $this->Home_model->create($dispatcher, $terminal, $bound, $dispatch_date, $bus_no, $dispatch_time, $bus_route, $bus_driver, $bus_conductor, $or_no, $no_of_pass);
        if($res == "success"){
            redirect(site_url('Home'));
        }else{
            redirect(site_url('Home/create_failed'));
        }
    }

    public function create_failed(){
        echo "create operation failed";
    }
    
    public function arrival_post()
    {

    $dispatcher = $this->session->username;
    $terminal = 'Cabanatuan';
    $bound = 'Dispatch';
    $arrival_date = $this->input->post(mdate('%Y-%m-%d', now()));
    $bus_no = $this->input->post('bus_no');
    $arrival_time = $this->input->post(mdate('%H:%i:%s', now()));
    $bus_route = $this->input->post('bus_route');
    $bus_driver = $this->input->post('bus_driver');
    $bus_conductor = $this->input->post('bus_conductor');
    $or_no = $this->input->post('or_no');
    $no_of_pass = $this->input->post('no_of_pass');

    $res = $this->Home_model->arrival($dispatcher, $terminal, $bound, $arrival_date, $bus_no, $arrival_time, $bus_route, $bus_driver, $bus_conductor, $or_no, $no_of_pass);
        if($res == "success"){
            redirect(site_url('Home'));
        }else{
            redirect(site_url('Home/create_failed'));
        }
    }

    public function arrival_failed(){
        echo "create operation failed";
    }
}
