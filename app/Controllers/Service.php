<?php

namespace App\Controllers;

use App\Models\Mydev_model;
use App\Libraries\curl;

class Service extends BaseController
{
    public function __construct()
    {
        $this->config = new \Config\App();
        $this->Mydev_model = new Mydev_model();
        $this->curl = new curl();
        // $request = \Config\Services::request();

    }
    public function api_list()
    {
        $date_current = date('Y-m-d H:i:s');
        $token = md5($date_current . 'myapiss5');
        $url = "https://takeme.la/tikky_training/tikky_api";
        $info = array(
            'd' => $date_current,
            'token' => $token

        );
        $body = $info;

        $res = $this->curl->post($url, $body);

        $us = json_encode($res, true);
        // $user_name = $us['more_data'][0]['user_name'];

        // print_r($user_name) ;
        // foreach ($res as  $y) {
        //     echo " $y <br>";
        //   }
        //   echo $res;
        // echo();
        // var_dump($res);
        $dat = $res->body;
        $datt = json_decode($dat, true);
        // print_r($datt);
        // echo $datt['more_data'][5]['user_logo'];
        // echo $datt['more_data'][5]['user_id'];
        // echo count($datt['more_data']);
        $real = "";
        $logo = "";
        $id = "";
        $total = [];
        for ($i = 0; $i < 15; $i++) {
            $real .= $datt['more_data'][$i]['user_name'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $logo .= $datt['more_data'][$i]['user_logo'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $id .= $datt['more_data'][$i]['user_id'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $total[] = [
                'username'  => $datt['more_data'][$i]['user_name'],
                'user_logo' => $datt['more_data'][$i]['user_logo'],
                'user_id'   => $datt['more_data'][$i]['user_id'],
            ];
        }
        // echo $total;
        // return $real;
        // Access the user_name field
        //         $user_name = $datt['more_data'][0]['user_name'];

        // echo $user_name;
        // echo $dat;
        // exit;
        $total1['send_data_to_view_arr'] = $total;
        return view('table_lucky', $total1);
    }
    public function th()
    {
        $date_current = date('Y-m-d H:i:s');
        $token = md5($date_current . 'myapiss5');
        $url = "https://takeme.la/tikky_training/tikky_api";
        $info = array(
            'd' => $date_current,
            'token' => $token

        );
        $body = $info;

        $res = $this->curl->post($url, $body);

        $us = json_encode($res, true);
        // $user_name = $us['more_data'][0]['user_name'];

        // print_r($user_name) ;
        // foreach ($res as  $y) {
        //     echo " $y <br>";
        //   }
        //   echo $res;
        // echo();
        // var_dump($res);
        $dat = $res->body;
        $datt = json_decode($dat, true);
        // print_r($datt);
        // echo $datt['more_data'][5]['user_logo'];
        // echo $datt['more_data'][5]['user_id'];
        // echo count($datt['more_data']);
        $real = "";
        $logo = "";
        $id = "";
        $total = [];
        for ($i = 0; $i < 15; $i++) {
            $real .= $datt['more_data'][$i]['user_name'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $logo .= $datt['more_data'][$i]['user_logo'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $id .= $datt['more_data'][$i]['user_id'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $total[] = [
                'username'  => $datt['more_data'][$i]['user_name'],
                'user_logo' => $datt['more_data'][$i]['user_logo'],
                'user_id'   => $datt['more_data'][$i]['user_id'],
            ];
        }
        // echo $total;
        // return $real;
        // Access the user_name field
        //         $user_name = $datt['more_data'][0]['user_name'];

        // echo $user_name;
        // echo $dat;
        // exit;
        $total1['send_data_to_view_arr'] = $total;

        return view('th', $total1);
    }

    public function eng()
    {
        $date_current = date('Y-m-d H:i:s');
        $token = md5($date_current . 'myapiss5');
        $url = "https://takeme.la/tikky_training/tikky_api";
        $info = array(
            'd' => $date_current,
            'token' => $token

        );
        $body = $info;

        $res = $this->curl->post($url, $body);

        $us = json_encode($res, true);
        // $user_name = $us['more_data'][0]['user_name'];

        // print_r($user_name) ;
        // foreach ($res as  $y) {
        //     echo " $y <br>";
        //   }
        //   echo $res;
        // echo();
        // var_dump($res);
        $dat = $res->body;
        $datt = json_decode($dat, true);
        // print_r($datt);
        // echo $datt['more_data'][5]['user_logo'];
        // echo $datt['more_data'][5]['user_id'];
        // echo count($datt['more_data']);
        $real = "";
        $logo = "";
        $id = "";
        $total = [];
        for ($i = 0; $i < 15; $i++) {
            $real .= $datt['more_data'][$i]['user_name'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $logo .= $datt['more_data'][$i]['user_logo'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $id .= $datt['more_data'][$i]['user_id'] . '<br>';
        }
        for ($i = 0; $i < 15; $i++) {
            $total[] = [
                'username'  => $datt['more_data'][$i]['user_name'],
                'user_logo' => $datt['more_data'][$i]['user_logo'],
                'user_id'   => $datt['more_data'][$i]['user_id'],
            ];
        }
        // echo $total;
        // return $real;
        // Access the user_name field
        //         $user_name = $datt['more_data'][0]['user_name'];

        // echo $user_name;
        // echo $dat;
        // exit;
        $total1['send_data_to_view_arr'] = $total;

        return view('eng', $total1);
    }

    public function register()
    {
        return view('table');
    }
    public function process_register()
    {

        $username = "";
        $password = "";
        $c_password = "";
        $name = "";
        $surname = "";
        $email = "";
        $cid = "";
        $phonenumber = "";
        $address = "";
      
        

            if (isset($_POST['username']) && $_POST['username'] != '') {
                $username = $_POST['username'];
            }
            if (!$username) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data username", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }
            $pattern_username = "/^[a-zA-Z0-9_]{8,16}$/";
            if (preg_match($pattern_username, $username) == FALSE) {
                $response = array('ret' => '301', 'msg' => 'Invalid pattern username');
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }


            if (isset($_POST['password']) && $_POST['password'] != '') {
                $password = $_POST['password'];
            }
            if (!$password) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data password", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }
            $pattern_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
            // $pattern_password = "/[\u0E00-\u0E7F]/";

            if (preg_match($pattern_password, $password) == FALSE) {
                $response = array('ret' => '301', 'msg' => 'Invalid pattern password');

                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if (isset($_POST['c_password']) && $_POST['c_password'] != '') {
                $c_password = $_POST['c_password'];
            }
            if (!$c_password) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data confirm password", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }
            $pattern_c_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
            // $pattern_c_password = "/[\u0E00-\u0E7F]/";
            if (preg_match($pattern_c_password, $c_password) == FALSE) {
                $response = array('ret' => '301', 'msg' => 'Invalid pattern Confirm-password');
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if ($username == $password) {
                $response = array('ret_code' => '202', 'msg' => "Invalid password and user can not be the same", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if ($password != $c_password) {
                $response = array('ret_code' => '202', 'msg' => "Invalid password and Confirm-password mismatching", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }
            if (isset($_POST['name']) && $_POST['name'] != '') {
                $name = $_POST['name'];
            }
            if (!$name) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data name", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            $pattern_name = "/^[\p{L}\p{M}]+$/u";
            if (preg_match($pattern_name, $name) == FALSE) {
                $response = array('ret_code' => '302', 'msg' => "Pattern name is wrong!");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if (isset($_POST['surname']) && $_POST['surname'] != '') {
                $surname = $_POST['surname'];
            }
            if (!$surname) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data surname", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            $pattern_surname = "/^[\p{L}\p{M}]+$/u";
            if (preg_match($pattern_surname, $surname) == FALSE) {
                $response = array('ret' => '303', 'msg' => '"Pattern surname is wrong!"');
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if (isset($_POST['email']) && $_POST['email'] != '') {
                $email = $_POST['email'];
            }
            if (!$email) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data email", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            $pattern_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
            if (preg_match($pattern_email, $email) == FALSE) {
                $response = array('ret' => '304', 'msg' => "Pattern email is wrong!");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }

            if (isset($_POST['cid']) && $_POST['cid'] != '') {
                $cid = $_POST['cid'];
            }

            if (!$cid || !preg_match('/^\d{13}$/', $cid)) {
                $response = array('ret_code' => '202', 'msg' => "Invalid data Citizin ID", "data" => "");
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }


            if (isset($_POST['phonenumber']) && $_POST['phonenumber'] != '') {
                $phonenumber = $_POST['phonenumber'];
            }
            // if(!$phonenumber){
            //     $response = array('ret_code'=>'202','msg'=>"Invalid data","data"=>"");
            //     echo json_encode($response);
            //     exit;
            // }
            if (isset($_POST['address']) && $_POST['address'] != '') {
                $address = $_POST['address'];
                // $_POST['address'];

            }
        
        $password = md5($password);
        // if(!$address){
        //     $response = array('ret_code'=>'202','msg'=>"Invalid data","data"=>"");
        //     echo json_encode($response);
        //     exit;
        // }
        // Create connection
        // $conn = mysqli_connect( $servername, $username_user , $password_user  );
        // mysqli_select_db($conn,$dbname);
        // ($conn->errno);
        // Check connection
        // if ($conn->errno) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // @mysqli_query($conn,"set character_set_results=utf8mb4");
        // @mysqli_query($conn,"set character_set_client=utf8mb4");
        // @mysqli_query($conn,"set character_set_connection=utf8mb4");
        // $sql = "SELECT * FROM user_info;";
        // $result = mysqli_query($conn,$sql);

        $sql = "SELECT username,citizin_id,email FROM user_info WHERE username ='{$username}' OR citizin_id='{$cid}' OR email='{$email}' LIMIT 3;";

        $rs = $this->Mydev_model->select($sql);

        if ($rs) {
            $user = "";
            $citi = "";
            $email_er = "";
            $don = "";
            if ($username == $rs[0]->username) {
                $user = "{username duplicate} ";
            }
            if (strlen($cid) != '13') {
                $don = "{citizin_id only 13 digits}";
            }
            if ($cid == $rs[0]->citizin_id) {
                $citi = " {citizin_id duplicate} ";
            }
            if ($email == $rs[0]->email) {
                $email_er = " {email duplicate}";
            }
            $response = array('ret_code' => '303', 'msg' => $email_er . $citi . $user . $don);
            echo json_encode($response);
            exit;
        }
        

        




        $sql_ins = "INSERT INTO user_info
        (`username`, `password`, `citizin_id`, `email`, `name`, `surname`, `address`, `phone_number`) 
        VALUES ('" . $username . "', '" . $password . "', '" . $cid . "', '" . $email . "', '" . $name . "', '" . $surname . "',' " . $address . "', '" . $phonenumber . "');
        ";

        // $result_insert = mysqli_query($conn,$sql);
        $execute = $this->Mydev_model->execute($sql_ins);

        // $sql_citizin =  "SELECT username FROM user_info WHERE citizin ='{$cid}' LIMIT 1"; //sql check for 
        // $result = $web->select($sone)
        // if (count(sql_citizin) >0){
        //     $response =array('ret'=>'101','msg'=>"success","data"=>$_POST);
        //     write_log(json_encode($response));
        //     echo json_encode($response);
        //     exit;
        // }

        // $sql_check = "SELECT FROM user_info FROM user_info WHERE username = '$username' LIMIT 1 ";
        // $array_result = array();

        // $sql_citizin =  "SELECT citizen_id FROM user_info WHERE citizin ='{$cid}' LIMIT 1"; //sql check for 
        //     $result = $this->Mydev_model->select($sql_citizin);
        //     if(count($result>0)){
        //         $response =array('ret'=>'301','msg'=>"duplicate citizin","data"=>$_POST);
        //         write_log(json_encode($response));
        //         echo json_encode($response);
        //         exit;
        //     }

        //     $sql_username =  "SELECT citizen_id FROM user_info WHERE username ='{$username}' LIMIT 1"; //sql check for 
        //     $result = $this->Mydev_model->select($sql_username);
        //     if(count($result>0)){
        //         $response =array('ret'=>'301','msg'=>"duplicate username","data"=>$_POST);
        //         write_log(json_encode($response));
        //         echo json_encode($response);
        //         exit;
        //     }

        //     $sql_email =  "SELECT email FROM user_info WHERE email ='{$email}' LIMIT 1"; //sql check for 
        //     $result = $this->Mydev_model->select($sql_email);
        //     if(count($result>0)){
        //         $response =array('ret'=>'301','msg'=>"duplicate email","data"=>$_POST);
        //         write_log(json_encode($response));
        //         echo json_encode($response);
        //         exit;
        //     }


        if ($execute) {
            $response = array('ret' => '101', 'msg' => "success", "data" => $_POST, 'location' => "https://together-gladly-airedale.ngrok-free.app/service/login_form");
            $this->write_log(json_encode($response));
            echo json_encode($response);
            exit;
        } else {
            $response = array('ret' => '301', 'msg' => "Unsuccess dupli");
            // $sql_citizin =  "SELECT username FROM user_info WHERE citizin ='{$cid}' LIMIT 1"; //sql check for 
            // $result = $web->select($sone)
            // if (count(sql_citizin) >0){
            //     $response =array('ret'=>'101','msg'=>"success","data"=>$_POST);
            //     write_log(json_encode($response));
            //     echo json_encode($response);
            //     exit;
            // }
            //response json
            //exit
            //$sql_password =  SELECT username FROM user_info WHERE username ='{$username}' LIMIT 1; sql check for 
            //$result = $web->select($sone)
            //if count >0
            //response json
            //exit
            //$sql_email =  SELECT username FROM user_info WHERE username ='{$username}' LIMIT 1; sql check for 
            //$result = $web->select($sone)
            //if count >0
            //response json
            //exit
            echo json_encode($response);
            $this->write_log(json_encode($response));
        }
        // while($row = mysqli_fetch_object($result)) {
        //     array_push($array_result, $row);
        // }
        // if(count($array_result)>0){
        //     for($i=0;$i<count($array_result);$i++){
        //         echo "id =".$array_result[$i]->id;
        //         echo "|username =".$array_result[$i]->username;
        //         echo "<hr>";
        //     }
        // }

        // mysqli_close( $conn );

    }
    
    public function index()
    {

        // echo date('Y/m/d H:i:s');
        // echo "<br>";
        // $rid = $this->request->getGet('rid');
        // $ridx = $this->request->getPost('ridx');
        // echo "Method : ".$this->request->getMethod();
        // echo $rid;
        // echo '<br>';
        // echo $ridx;
        // echo '<br>';
        //select
        // $sql = "SELECT * FROM user_info WHERE status ='1';";
        // $rs = $this->Mydev_model->select($sql);
        // echo "<pre>";
        // // print_r($rs);
        // if(count($rs)>0){
        //     for($i=0;$i<count($rs);$i++){
        //         echo $rs[$i]->username;
        //         echo '<br>';
        //         echo $rs[$i]->citizin_id;
        //         echo '<hr>';
        //     }
        // }
        //insert
        $username = strtolower($this->request->getGet('username'));
        // $username = isset($_GET['username'])?$_GET['username']:"";
        $citizin_id = strtolower($this->request->getGet('citizin_id'));
        $email = strtolower($this->request->getGet('email'));
        // $username = 'testname89';
        $password = md5('Password01!');
        // $citizin_id = '7894561231233';
        // $email = 'kun@hot.lon';
        $name = 'Hi';
        $surname = 'LO';
        $address = 'gg';
        $phone_number = '02';

        $sql_insert = "INSERT INTO user_info (username,password,citizin_id,email,name,surname,address,phone_number)
         VALUES
         ('{$username}','{$password}','{$citizin_id}','{$email}','{$name}','{$surname}','{$address}','{$phone_number}')";

        $sql = "SELECT username,citizin_id,email FROM user_info WHERE username ='{$username}' OR citizin_id='{$citizin_id}' OR email='{$email}' LIMIT 3;";

        $rs = $this->Mydev_model->select($sql);


        if ($rs) {
            $user = "";
            $citi = "";
            $email_er = "";
            $don = "";
            if ($username == $rs[0]->username) {
                $user = "{username duplicate} ";
            }
            if (strlen($citizin_id) != '13') {
                $don = "{citizin_id only 13 digits}";
            }
            if ($citizin_id == $rs[0]->citizin_id) {
                $citi = " {citizin_id duplicate} ";
            }
            if ($email == $rs[0]->email) {
                $email_er = " {email duplicate}";
            }
            $response = array('ret_code' => '303', 'msg' => $email_er . $citi . $user . $don);
            echo json_encode($response);
            exit;
        }




        //   echo '<pre>';
        //   if($rs[0]->username){
        //     echo 'username duplicate';
        //     echo $username;
        //   }else if($rs[0]->citizin_id){
        //     echo 'citizin_id duplicate';
        //   }else{
        //     echo 'email duplicate';
        //   }





        echo "<hr>";
        $insert = "INSERT INTO user_info (username, password, citizin_id, email, name, surname, address, phone_number) VALUES ('testname123', 'Password01!', '7894561231233', 'kun@hot.lon', 'Hi', 'LO', 'gg', '02')";

        $execute = $this->Mydev_model->execute($sql_insert);





        if ($execute) {
            $response = array('ret_code' => '101', 'msg' => "insert Success");
            echo json_encode($response);
        }
        // var_dump($execute);
        // print_r($rs);
        // if(count($rs)>0){
        //     for($i=0;$i<count($rs);$i++){
        //         echo $rs[$i]->username;
        //         echo '<br>';
        //         echo $rs[$i]->citizin_id;
        //         echo '<hr>';
        //     }
        // }

    }
    public function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    

    public function write_log($log)
    {
        //Something to write to txt log
        $date_log = date("Y-m-d H:i:s") . PHP_EOL .
            "IP :" . $this->get_client_ip() . PHP_EOL .
            "DATA : " . $log . PHP_EOL . "-------------------------" . PHP_EOL;
        //Save string to log, use FILE_APPEND to append.
        file_put_contents('logs' . date("Ymd") . '.txt', $date_log, FILE_APPEND);
    }
    public function login_form()
    {
        return view('login_form');
    }
    public function login_success()
    {
        return view('login_success');
    }
    public function login()
    {
        $username_user = "";
        $password_user = "";
        // $servername = "127.0.0.1";
        // $username = "hunter";
        // $password = "123456";

        // $dbname = "full_ss5";

        if (isset($_POST['username_user']) && $_POST['username_user'] != '') {
            $username_user = $_POST['username_user'];
        }
        if (!$username_user) {
            $response = array('ret_code' => '202', 'msg' => "Invalid data username", "data" => "");
            echo json_encode($response);
            $this->write_log(json_encode($response));
            exit;
        }
        $pattern_username = "/^[a-zA-Z0-9_]{8,16}$/";
        if (preg_match($pattern_username, $username_user) == FALSE) {
            $response = array('ret' => '301', 'msg' => 'Invalid pattern username');
            echo json_encode($response);
            $this->write_log(json_encode($response));
            exit;
        }

        if (isset($_POST['password_user']) && $_POST['password_user'] != '') {
            $password_user = $_POST['password_user'];
        }

        if (!$password_user) {
            $response = array('ret_code' => '202', 'msg' => "Invalid data password", "data" => "");
            echo json_encode($response);
            $this->write_log(json_encode($response));
            exit;
        }
        $pattern_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
        // $pattern_password = "/[\u0E00-\u0E7F]/";

        if (preg_match($pattern_password, $password_user) == FALSE) {
            $response = array('ret' => '301', 'msg' => 'Invalid pattern password');

            echo json_encode($response);
            $this->write_log(json_encode($response));
            exit;
        }



        // $conn = mysqli_connect( $servername, $username, $password );
        // mysqli_select_db($conn,$dbname);

        // // Check connection
        // if ($conn->errno) {
        //     $response = array('ret'=>'401','msg'=>"Connection failed: " . $conn->connect_error);
        //         echo json_encode($response);
        //         // write_log(json_encode($response));
        //         exit;
        // }

        // @mysqli_query($conn,"set character_set_results=utf8mb4");
        // @mysqli_query($conn,"set character_set_client=utf8mb4");
        // @mysqli_query($conn,"set character_set_connection=utf8mb4");

        $password_user = md5($password_user);

        $sql_username = "SELECT username,PASSWORD,status FROM user_info WHERE username ='" . $username_user . "' AND PASSWORD = '" . $password_user . "' ";


        // $result = mysqli_query($conn,$sql_username);
        $array_result = $this->Mydev_model->select($sql_username);

        // $array_result = array();

        // //ทำในกรณีที่ไอดีถูกแต่พาสผิด
        // $sql_only_user = "SELECT username FROM user_info WHERE username = '".$username_user."';

        // while($row = mysqli_fetch_object($result)) {
        //     array_push($array_result, $row);
        // }
        // mysqli_close( $conn );



        if (count($array_result) == 1) {
            if ($array_result[0]->status == '1') {
                $response = array('ret' => '101', 'msg' => 'Success');
                echo json_encode($response);
                session_start();
                $_SESSION['username'] = $array_result[0]->username;
                $this->write_log(json_encode($response));
                exit;
            } else {
                $response = array('ret' => '201', 'msg' => 'Unsuccess user not active');
                echo json_encode($response);
                $this->write_log(json_encode($response));
                exit;
            }
        } else {
            $response = array('ret' => '201', 'msg' => 'Unsuccess user not found');
            echo json_encode($response);
            $this->write_log(json_encode($response));
            exit;
        }
    }
    public function selectzip(){
        $zipcode = $this->request->getPost('zipcode');
        $sql_zip = "SELECT a.name_in_thai AS province, b.name_in_thai AS districts , c.name_in_thai AS subdistricts, a.id as province_id, b.id as district_id, c.id as subdistrict_id FROM provinces AS a
        LEFT JOIN districts AS b
        ON a.id = b.province_id
        LEFT JOIN subdistricts AS c
        ON  b.id = c.district_id
        WHERE c.zip_code='" . $zipcode . "';";
        $zip = $this->Mydev_model->select($sql_zip);
        // print_r($zip);
        $province = array();
        $district = array();
        $sub_district = array();
        for($i=0;$i<count($zip);$i++){
            $province[$zip[$i]->province_id] = $zip[$i]->province;
        }
        $response = array('ret'=>'101','province'=>$province);
        echo json_encode($response);
    }
    public function logout_form()
    {
        session_start();
        session_destroy();
        header('Location: login_form');
        exit;
    }
}
