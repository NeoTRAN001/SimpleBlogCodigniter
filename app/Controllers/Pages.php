<?php namespace App\Controllers;

class Pages extends BaseController 
{
    public function index()
    {
        return view('pages/home');
    }

    public function showme($page = 'home')
    {
        echo 'This page is: '.$page;
    } 
}