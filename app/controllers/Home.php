<?php

/*
 * home class
 */

class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Home';

        $this->view("minima/Home", $data);
    }
}
