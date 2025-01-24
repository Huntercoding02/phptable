<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function index2()
    {
        echo "HELL";
    }
    public function myview()
    {
        $arr = array("x"=>"x+1","y"=>"x+5","z"=>"x*5");
        $data['send_data_to_view']= 'my data form controller';
        $data['send_data_to_view_arr'] = $arr;
        return view('myview',$data);
    }
}

