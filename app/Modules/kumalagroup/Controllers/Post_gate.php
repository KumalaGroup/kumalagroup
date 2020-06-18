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
    public function delete_img()
    {
        $request = \Config\Services::request();
        $post =  $request->getPost();
        unlink($post['path'] . $post['name']);
    }
    public function hapus_berkas()
    {
        $request = \Config\Services::request();
        $post =  $request->getPost();
        unlink("./assets/img_marketing/pelamar/" . $post['foto']);
        unlink("./assets/img_marketing/pelamar/" . $post['cv']);
        unlink("./assets/img_marketing/pelamar/" . $post['surat_lamaran']);
    }
    function _curl_post($url, $data)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $r = curl_exec($curl);
        curl_close($curl);
        return $r;
    }
    function _curl_get($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $r = curl_exec($curl);
        curl_close($curl);
        return $r;
    }
}
