
<?php
class Users extends CI_Model{


    public function inse($data){
        // print_r($data);
     $this->db->insert('test5',$data);
       
    }

    public function verify($email,$pass){
        
        $pass = md5($pass);
        $query = $this->db->query("select sno from test5 where email='$email' and pass='$pass'");
        $row = $query->num_rows();
        if($row > 0)
        {
            echo "login sucessfull";
            $this->load->view('view_data');
        }
        else{
            echo "try again";
        }

       }

       public function fetch_data($ss){
           print_r($ss);
            
        $query=$this->db->select("*")->from('test5')->get()->result();
        print_r($query);
            return $query;


       }

           public function del_data($name){
            
            if ($this->db->delete(' ',array('name'=>$name))){
                return true;
            }else{
                return false;
            }
        }

        public function up_mul_img($data)
        {
            $this->db->insert('test6',$data);

        }

        public function num_row(){

            
        }
     }
    ?>

         