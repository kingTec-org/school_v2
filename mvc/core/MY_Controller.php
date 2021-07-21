<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property document_m $document_m
 * @property email_m $email_m
 * @property error_m $error_m
 */
class MY_Controller extends CI_Controller {
/*
        | -----------------------------------------------------
        | PRODUCT NAME: 	Sistem Informasi Sekolah
        | -----------------------------------------------------
        | AUTHOR:			safari
        | -----------------------------------------------------
        | EMAIL:			safari.erie@gmail.com
        | -----------------------------------------------------
        | COPYRIGHT:		DKM
        | -----------------------------------------------------
        | WEBSITE:			
        | -----------------------------------------------------
	*/
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->config('iniconfig');
        $this->data['errors'] = [];

        if ( !$this->config->config_install() ) {
            redirect(site_url('install'));
        }
    }
}

