<?php

/**
 * About class
 */

class About extends Controller
{
    public function index()
    {
        $data['page_title'] = 'About';

        $this->view("minima/AboutUs", $data);
    }
}
