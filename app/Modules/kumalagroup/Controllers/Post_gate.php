<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;

class Post_gate extends Controller
{
    public function post_img()
    {
        $request = \Config\Services::request();
        $post =  $request->getPost();
        file_put_contents($post['path'] . $post['name'], base64_decode($post['file']));
        echo $post['name'];
    }
    public function post_file()
    {
        $request = \Config\Services::request();
        $post =  $request->getPost();
        $gambar = $this->request->getFile('file');
        $gambar->move($post['path'], $post['name']);
        echo $gambar->getName();
    }
    public function delete_img()
    {
        $request = \Config\Services::request();
        $post =  $request->getPost();
        unlink($post['path'] . $post['name']);
    }
}
