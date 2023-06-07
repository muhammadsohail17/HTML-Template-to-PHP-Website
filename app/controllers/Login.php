<?php

/*
 * Login class
 */

class Login extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Login';

        $this->view("minima/Login", $data);
    }
}
