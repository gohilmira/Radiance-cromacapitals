<?php
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('captcha');
        $files = glob('./images/*');
        foreach ($files as $file) {
            if (is_file($file))
                unlink($file);
        }
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
        $string = '';
        $length = 10;

        for ($i = 0; $i < $length; $i++) {
            $string .= substr($characters, rand(0, strlen($characters) - 1), 1);
        }


        $captcha_array = array(

            'img_path' => APPPATH . '../images/',
            'img_url' => base_url() . 'images/captcha',
            'img_width' => '150',
            'img_height' => 50,
            'font_size' => 200,
            'word_length'   => 4,
            'word' =>  $string,

            'colors' => array(
                'background' => array(255, 256, 555),
                'border' => array(252, 226, 535), // changed from 'border'
                'text' => array(115, 236, 445),
                'grid' => array(30, 50, 578)
            )

        );
        //print_R($captcha_array);



        if (isset($_POST['send_btn'])) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            /* $this->form_validation->set_rules('phone_number','Phone number','required');*/
            $this->form_validation->set_rules('message', 'Message', 'required');


            if ($this->form_validation->run() != False) {



                $contact_us = array();
                $contact_us['name'] = $_POST['name'];
                $contact_us['email'] = $_POST['email'];
                /*  $contact_us['mobile']=$_POST['phone_number'];*/
                $contact_us['message'] = $_POST['message'];

                if ($this->db->insert('contact_us', $contact_us)) {
                    $this->session->set_flashdata('success', "Message sent successfully.");
                } else {
                    $this->session->set_flashdata('error', "Something wrong.");
                }
            }
        }
        $this->show->main('contact');
    }
}
