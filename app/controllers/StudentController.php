<?php

namespace App\Controllers;
class StudentsController
{
    
        public function index()
        {
            echo '<h1>Daftar Siswa</h1>';
            echo '<p>Menampilkan Daftar Siswa</p>';

        }
        public function create()
        {            
            echo '<h1>Tambah Siswa</h1>';
            echo '<p>Menampilkan From Tambah     Siswa</p>';
        }
}
?>