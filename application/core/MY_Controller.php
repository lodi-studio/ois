<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('Page');
    }
}

class Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->check_logged_in();
    }

    function render(Page $page)
    {
        // load view header
        $this->load->view('template/header', $page);

        // nav bar
        $this->load->view('template/topnav', true);

        // .wrapper
        $this->load->view('template/wrapper', true);

        // sidenavbar
        $this->load->view('template/sidenav', true);

        // .content-wrapper
        $this->load->view('template/content_wrapper', true);

        // Breadcrumbs
        $this->load->view('template/breadcrumb', true);

        // load main view
        $this->load->view($page->main, $page);

        // load footer
        // included (wrapper, content-wrapper close tag)
        // logout modal and Scroll to Top Button
        $this->load->view('template/footer');
    }

    function check_logged_in()
    {
        if ($this->session->logged_in == null)
        {
            redirect('auth');
        }
    }

}

class Auth_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render(Page $page)
    {
        // load main view
        $this->load->view($page->main, $page);
    }

    function check_logged_in()
    {
        if (!$this->session->logged_in == null)
        {
            redirect('home');
        }
    }
}
