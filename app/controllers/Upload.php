<?php

/*
 * Upload class
 */

class Upload extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Upload';

        $this->view("minima/Upload", $data);
    }

    public function image()
    {
    }
}
