<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CookieConsent extends CI_Controller {
    public function index(){
        $this->load->view('cookiw_test');
    }

        public function accept() {
            // Set a cookie to remember the user's consent
            $cookie = [
                'name'   => 'cookies_accepted',
                'value'  => 'true',
                'expire' => '86500',
                'secure' => TRUE
            ];
            $this->input->set_cookie($cookie);
    
            // Redirect back to the previous page
            redirect($this->agent->referrer());
        }
    
        public function reject() {
            // Set a cookie to remember the user's rejection
            $cookie = [
                'name'   => 'cookies_rejected',
                'value'  => 'true',
                'expire' => '86500',
                'secure' => TRUE
            ];
            $this->input->set_cookie($cookie);
    
            // Redirect back to the previous page
            redirect($this->agent->referrer());
        }
    }
    