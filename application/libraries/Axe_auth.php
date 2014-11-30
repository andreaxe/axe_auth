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

        // Load the session, CI2 as a library, CI3 uses it as a driver
        if (substr(CI_VERSION, 0, 1) == '2')
        {
            $this->load->library('session');
        }
        else
        {
            $this->load->driver('session');
        }

    }

    /**
     * @param $username
     * @param $password
     * @param $ip
     */
    public function login ($username,$password, $ip)
    {
        $result = $this->axe_auth_model->check_credentials($username,$password);
        $result ? $this->whitelist($ip) :
    }

    /**
     * @param $ip
     */
    public function whitelist ($ip)
    {

    }

    /**
     * @param $ip
     */
    public function blacklist ($ip)
    {

    }


    public function checkAttempts ($username, $ip)
    {
        
    }
}