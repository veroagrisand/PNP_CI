<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Test extends Controller
{
    public function index()
    {
        $data['title']  = 'Selamat Datang semuanya';
        $data['msg1']    = 'Bagaimana kabarnya???';
        $data['msg2']    = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        echo view('viewnya_test', $data);
}
}