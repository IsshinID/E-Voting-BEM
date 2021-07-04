<?php

class Auth_model extends CI_model {

    function __construct()
    {
        // parent::__construct();
        // die($this->session->userdata('email'));
        if( $this->session->userdata('email') ) {

        }
    }
}