<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->has_userdata('user_login')) {
            redirect(base_url($this->conn->company_info('panel_path') . "/dashboard"));
        }
    }

    public function index()
    {

        $data['page_name'] = 'Login';



        if (isset($_POST['login'])) {

            //  $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Emali', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == TRUE) {
                $where = array(
                    //    'username'=>$_POST['username'],                   
                   $login = 'email' => $_POST['email'],
                    $login= 'password' => md5($_POST['password'])
                );

                $res = $this->conn->runQuery('*', 'users', $where);
                if ($res) {
                    if ($res[0]->block_status == 0) {
                        //   if($res[0]->is_email_verify==1){ 
                        $this->session->set_userdata("user_login", true);
                        $this->session->set_userdata("user_id", $res[0]->id);
                        $this->session->set_userdata("profile", $res[0]);
                        $this->session->set_flashdata("success", "You are logged in");
                        $rreg_type = $this->conn->setting('reg_type');

                        $this->session->set_userdata('reg_plan', $rreg_type);
                        $ip = $this->input->ip_address();

                        $login_details['u_code'] = $res[0]->id;
                        $login_details['ip_address'] = $ip;
                        $this->db->insert('login_details', $login_details);

                        $website = $this->conn->company_info('title');
                        $company_url = $this->conn->company_info('base_url');
                        $msg2 = "Dear " . $login['name'] . " , Welcome to $website. Your User ID : " . $login['email'] . ", Password : " . $_POST['password'] . " . For more visit $company_url .";
                        $msg2 = "Welcome " . $login['name'] . " . You have been successfully Login as a member of $website.Your login Credentials as follows - email " . $login['email'] . ", And Password : " . $_POST['password'] . ". Thanks! test.com team.";
                        // $this->message->sms($mobile, $msg2);
                        $this->message->send_mail($login['email'], 'Registration success', $msg2);

                        if (1 != 1) {
                            redirect($this->session->userdata('login_redirect'), "refresh");
                        } else {
                            redirect(base_url($this->conn->company_info('panel_path') . "/dashboard"), "refresh");
                        }

                        // }else{

                        //      $this->session->set_flashdata("error", "Please verify your email."); 
                        // }

                    } else {
                        $this->session->set_flashdata("error", "Account Block.Please Contact to admin");
                    }

                } else {
                    $this->session->set_flashdata("error", "Incorrect username or password.");
                }
            }
        }

        $this->show->main('login');
    }



}