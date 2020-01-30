<?php


class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        $data = array('title' => 'Welcome');
        $this->view('pages/index', $data);
    }
}