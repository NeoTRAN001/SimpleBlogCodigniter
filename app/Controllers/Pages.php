<?php namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController 
{
    public function index()
    {
        $model = new BlogModel();
        $data['news'] = $model->getPosts();

        echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer');
    }

    public function showme($page = 'home')
    {
        if(!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don´t have a pag for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        $model = new BlogModel();
        $data['news'] = $model->getPosts();

        echo view('templates/header', $data);
        echo view('pages/'.$page);
        echo view('templates/footer');
    } 
}