<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Doni Wahyu Kurniawan <br> 2241720015';
    }

    public function articles($id) {
        return 'Halaman artikel dengan ID '.$id;
    }
}
