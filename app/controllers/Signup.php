<?php

/*
 * Signup class
 */

class Signup extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Signup';

        $this->view("minima/Signup", $data);
    }
}
