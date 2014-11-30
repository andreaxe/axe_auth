<?php

/**
 * @author: andregarxia@gmail.com
 * Date: 30-11-2014
 *
 */
class Axe_auth
{

    public function __construct()
    {
        $this->load->config('axe_auth');
        $this->load->library('email');
        $this->load->model('axe_auth_model');
    }



} 