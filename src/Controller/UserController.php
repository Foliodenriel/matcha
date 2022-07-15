<?php

namespace src\Controller;

use App\AbstractController;

class UserController extends AbstractController {

    private function checkallform($entries = NULL)
    {
        //this function check all required parameters send in a form and return false if one is missing.
        if($entries == NULL)
        return false;
        foreach ($entries as $entry){
           
            if (!$this->checkform($entry))
            {
                return false;
            }      
        }
        return true;
    }

    private function checkform($entry = NULL){
        //this simple function check if a required parameter submited in a form is there as expected.
        if (isset($entry) && !empty($entry))
            return true;
        return false;
    }

    private function check_existing_field($table, $field, $value, $state_matters = false, $statevalue = "")
    {
        //check if a field exist in any table and if exist, it returns an array of the field in parameters two, params one is true of false
        $conn = $this->dbmanager()->getConn();

        if ($state_matters == FALSE){
            $request = "SELECT * FROM ".$table." WHERE ".$field." = :value";
        }
        else{
            $request = "SELECT * FROM ".$table." WHERE ".$field." = :value and state ".$statevalue;
        }
         $stmt = $conn->prepare($request);
        $stmt->bindParam(':value', $value);
         $stmt->execute();
         $isthere = false;
         $ret = [];
         if($data = $stmt->fetch())
         {
             $isthere = true;
             $ret = $data;
         }
         return ([$isthere, $ret]);

    }

    private function add_new_user($firstname,$name,$pseudo,$email,$password)
    {
        $conn = $this->dbmanager()->getConn();
        $salt = hash('sha256', rand().$email);
        $securepassword = hash('sha512', $salt.$password) ;
        //$now = new DateTime('NOW');
        $stmt = $conn->prepare("INSERT INTO USERS (email, pseudo, name, first_name, password, salt, score,  state) VALUES (:email, :pseudo, :name, :first_name, :password, :salt, 0, 1)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':first_name', $firstname);
        $stmt->bindParam(':password', $securepassword);
        $stmt->bindParam(':salt', $salt);
       // $stmt->bindParam(':created_at', $now);
        $stmt->execute();

        //send email to user
        $user = $this->check_existing_field('users','email',$email,false,"");
        $user_id = $user[1]['id'];
        echo $user_id;
        $code = hash('sha256', rand().$email);
        $stmt = $conn->prepare("INSERT INTO email_codes (id_user, type, code, used) VALUES (:id_user, 1, :code, FALSE)");
        $stmt->bindParam(':id_user', $user_id);
        $stmt->bindParam(':code', $code);
       // $stmt->bindParam(':created_at', $now);
        $stmt->execute();

    }

    public function index()
    {
        $varTest = 'Bonjour';

        $this->render('index.php', [
            'test' => 'Ok',
        ]);
    }

    public function test()
    {
        echo('Working');
    }

    public function login()
    {
        
        $this->render('login.php', [
            'test' => 'Ok',
        ]);
    }

    public function forgot()
    {
        if(isset($_POST['email']) && $this->checkallform([$_POST['email']])){
        }
        else
        {
            $this->render('forgot.php', [
                'test' => 'Ok',
            ]);
        }
       
    }

    public function account()
    {
        
        $this->render('account.php', [
            'test' => 'Ok',
        ]);
    }

    public function reset()
    {
        
        $this->render('reset.php', [
            'test' => 'Ok',
        ]);
    }

    public function updateaccount()
    {
        
        $this->render('updateaccount.php', [
            'test' => 'Ok',
        ]);
    }
    
    public function validated()
    {
        
        $this->render('validated.php', [
            'test' => 'Ok',
        ]);
    }

    public function join()
    {

        if($this->checkallform([$_POST['firstname'],$_POST['name'],$_POST['pseudo'],$_POST['email'],$_POST['password']])){
        //user submited a login form

            //check if user already exist
            $check = $this->check_existing_field("users", "email", $_POST['email'], False, "");
            if ($check[0] == true)
            {

                echo "This account already exist. Please connect...";
                // $this->render('login.php', [
                //     'test' => 'Ok',
                // ]);
                //better do a redirect to route later than the upper code !!!!!!! ------------------------------------ !!!!!!
            }
            else{
                //check if pseudo is still available
                $check = $this->check_existing_field("users", "pseudo", $_POST['pseudo'], False, "");
                if ($check[0] == true)
                {

                    echo "This pseudo already exist. Please change your mind...";
                    // $this->render('join.php', [
                    //     'test' => 'Ok',
                    // ]);
                }
                else{
                        //record user into database //send email to user
                        $this->add_new_user($_POST['firstname'],$_POST['name'],$_POST['pseudo'],$_POST['email'],$_POST['password']);
                        

                        //send info to user about succesfull join
                }
            }
        }
        else{

            //user has not submitted a login form or has not filled all required fields
            $this->render('join.php', [
                'test' => 'Ok',
            ]);
        }

      
    }
}
