<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    //
    public function index(){
      $name='Muhammad.Faiz';
      $nickname='Ibnu Bastamam';
      return view('about',[
        'n' => $name,
        'nc' => $nickname
      ]);
    }
}