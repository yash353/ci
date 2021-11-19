<?php
require 'vendor/autoload.php';
require_once APPPATH.'libraries/dompdf/autoload.inc.php';
 
class Login extends CI_Controller    {

    public function index()
    {
       // $this->load->helper(array('url'),('form'));

       // $this->load->helper('form');

       // $this->load->view('register');

       $this->load->view('adm_login');

        //$this->load->view('up_img');

        //$this->load->view('up_mu_img');

        //$this->load->view('mail');

      //  $this->load->view('mail_attach');

       // $this->load->view('pdf_gen');

      // $this->load->view('view_data');

       

       // $this->load->model("Users");
      
    }


    public function ft_data()
    { 
         $data["fetch"]= $this->Users->fetch_data('ssss');
         print_r($data);
        $this->load->view("view_data",$data);
    }



    public function adm_login()

    {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('pass','password','required');
    
            if($this->form_validation->run()){
    
                echo "validation success";
                $this->load->view('view_data');
              
            }
            else{
              // echo "validation fail";
                $this->load->view('adm_login');
            }
        


        $email=$this->input->post('email');
        $pass=$this->input->post('pass');

        //$this->load->model('Users');
        if($this->Users->verify($email,$pass)){
         
            $this->load->view('view_data');

            // $session_data = array( 'email'=>$email );
        
            // $this->session->set_userdata($session_data);
            // redirect(base_url(). 'login/enter_aft_login');
    }else{
            echo 'error';
    }


      
    }



    public function enter_aft_login(){

            if($this->session->userdata('email') !=''){
                echo '<h1>WELCOME - '.$this->session->userdata('email').'</h1>';
                echo '<a href ="'.base_url().'login/logout">logout</a>';
            }

        }
        public function logout(){

            $this->session->unset_userdata('email');
            redirect(base_url().'login/adm_login');
        }

    
    public function login(){
        $this->load->view('adm_login');
     }
    public function reg()
    {
        
      
    //   $name=$this->input->post('un');
    //   $email=$this->input->post('email');
    //   $pass=md5($this->input->post('pass'));
    //   $age=$this->input->post('age');
    //   $mobieno=$this->input->post('mob');


    $data = $this->input->post();
    // print_r($data);
    $data['pass']= md5($this->input->post('pass'));
    unset($data['register']);
    // $this->load->model('Users');
    $this->Users->inse($data);
       

    } 
    public function regs(){
        
        $this->load->view('register');}


//     public function delete(){
                
//         $delete=$this->del_data->delete($name);
//         if($delete)
//         {
//             echo "delete sucessfully";
//         }else{
//             echo "not deleted ";
//         }
//     }


public function img(){
   
    $config['allowed_types'] = "gif|jpg|png|jpeg|pdf";
    $config['upload_path'] ="./up_img/";
    $this->load->library('upload',$config);


    if($this->upload->do_upload("igname")){
        echo "uploads successfully<br><br>";
        print_r($this->upload->data());
    }else{
        echo "error";
        print_r($this->upload->dispplay_error()); 
    }
}


    public function mul_img(){

        $countfile = count($_FILES['igname']['name']);
        $countuploadfile=0;
        $counteror=0;

        for($i=0; $i< $countfile; $i++){

            $_FILES['uploadfile']['name'] = $_FILES['igname']['name'][$i];
            $_FILES['uploadfile']['type'] = $_FILES['igname']['type'][$i];
            $_FILES['uploadfile']['size'] = $_FILES['igname']['size'][$i];
            $_FILES['uploadfile']['tmp_name'] = $_FILES['igname']['tmp_name'][$i];
            $_FILES['uploadfile']['error'] = $_FILES['igname']['error'][$i];
      
            $uploadstatus = $this->uploadfile('uploadfile');

            if($uploadstatus!=false){

                $countuploadfile++;

                $this->load->model('Users');

                $data=array(
                    'file_path'=>$uploadstatus,
                    'upload_on'=>date('Y-m-d H-i-s'),
                );

                $this->Users->up_mul_img($data);

            }else{
                $counteror++;
            }
        }
           
        }
        public function uploadfile($name){

            $uploadpath='./up_img/';

            if(!is_dir($uploadpath)){

                mkdir($uploadpath,0777,TRUE);
            }

            $config['upload_path']= $uploadpath;
            $config['allowed_types'] = "gif|jpg|png|jpeg|pdf";
            $config['encrypt_name'] =TRUE;

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload($name)){

                $fileData= $this->upload->data();
                return $fileData['file_name'];
            }else{
                return false;
            }

        }

        public function mailsend(){

            $EMAIL=$this->input->post('email');
            $PAS=$this->input->post('pas');
            $TO=$this->input->post('to');
            $SUBJECT=$this->input->post('sub');
            $MESSAGE=$this->input->post('mes');
            
            $data=$this->input->post();
            
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.mailtrap.io',
                'smtp_port' => 587,
                'smtp_user' => 'f9ab7f24a12d85', // change it to yours
                'smtp_pass' => '41da20d7b83493', // change it to yours
                'mailtype' => 'html'
            );
            $config['newline'] = "\r\n";
            $this->load->library('email', $config);
            $this->email->initialize($config);
            // $this->email->set_mailtype("html");
            $this->email->from($EMAIL);
            $this->email->to($TO);
            $this->email->subject($SUBJECT);
            $this->email->message($MESSAGE);
             
            if($this->email->send()){
               
                echo 'succesfully send';
            }else{
                print_r($this->email->print_debugger());
                exit;
            }
    }
        public function attach_mailsend(){

            
            $EMAIL=$this->input->post('email');
            $PAS=$this->input->post('pas');
            $TO=$this->input->post('to');
            $SUBJECT=$this->input->post('sub');
            $MESSAGE=$this->input->post('mes');
            $ATTACH_FILE=$this->upload_mailfile();

$data=$this->input->post();
print_r($data);
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.mailtrap.io';
            $config['smtp_port'] = '587';
            $config['smtp_timeout'] = '60';
            $config['smtp_user'] =  'f9ab7f24a12d85';
            $config['smtp_pass'] =  '41da20d7b83493';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;
$config['smtp_crypto'] ='tls';
           $this->load->library('email',$config);
            $this->email->initialize($config);
           //  $this->email->set_mailtype("html");
            $this->email->from( $EMAIL);
            $this->email->to($TO);
            $this->email->subject( $SUBJECT);
            $this->email->message( $MESSAGE);
            $this->email->attach( $ATTACH_FILE['C:/Users/Hp/Desktop/YASHWANT.pdf']);
            $this->email->send();
        }

        public function upload_mailfile(){

            $config['upload_path'] ='./up_img/';
            $config['allowed_types'] = "doc|docx|pdf";
            $this->load->library('upload',$config);
            $this->upload->do_upload('attach');
            // if($this->upload->do_upload('attach')
            // {
            //     return $this->upload->data();
            // }
            // else{
            //     echo 'error in upload file'; 
            // }

        }


        public function pdf_gen(){
           
            // instantiate and use the dompdf class
            $dompdf = new Dompdf\Dompdf();

            
            $first_name=$this->input->post('name');
            $last_name=$this->input->post('lname');
            $city=$this->input->post('city');
            $mss=$this->input->post('msg');

            $data = '';

            $data .= '<h1> YOUR DETIALS </h1>';

            $data .= '<strong>FIRST - NAME : </strong>'. $first_name .'<br>';
            $data .= '<strong>LAST - NAME : </strong>'. $last_name .'<br>';
            $data .= '<strong>CITY : </strong>'. $city .'<br>';
            $data .= '<strong>MESSAGE : </strong>'. $mss .'<br>';

            $dompdf->loadHtml($data);

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream();
        
        }

        public function pagintn(){
            
            $config =[
                    'base_url'=>base_url('login/view_data'),
                    'per_page'=>5,
                    // 'total_rows'=>
            ];
        
        }


    }
  ?>
  
