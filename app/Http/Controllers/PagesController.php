<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('welcome');
    }
    public function getAbout(){
        $fname="Amouta";
        $lname="The Second";
        $full=$fname . " " . $lname;
        $email='amouta@hamudi.com';
        $data['email']=$email;
        $data['fullname']=$full;
        return view('Static.about')->withData($data);
    }
    public function getContact(){
        return view('Static.contact');
    }
}