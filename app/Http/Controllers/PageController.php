<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }
    public function about() {
        echo "Muhammad Fauzan 1941720171";
    }
    public function article($id) {
        echo "Halaman Artikel dengan Id" .$id;
    }
}
