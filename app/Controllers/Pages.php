<?php namespace App\Controllers;

class Pages extends BaseController 
{
    public function index()
    {
        echo 'hi';
    }

    public function showme($page = 'home')
    {
        echo 'This page is: '.$page;
    } 
}