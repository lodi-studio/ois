<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page {

    function __construct()
    {
        $this->title             = '';
        $this->breadcrumb_title  = '';
        $this->breadcrumb_target = '';
        $this->breadcrumb_active = '';
        $this->main              = '';
        $this->data              = array();
    }

    // title of the page
    public $title;

    // breadcrumb title
    public $breadcrumb_title;

    // breadcrumb link
    public $breadcrumb_target;

    // breadcrumb active
    public $breadcrumb_active;

    // main view to be display
    public $main;

    // data to be display in the page
    public $data;
}
