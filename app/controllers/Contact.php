<?php

/*
 * contact class
 */

class Contact extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Contact Us';

        $this->view("minima/Contact", $data);
    }
}
