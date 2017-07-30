<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typebooks;

class TypeBooksController extends Controller
{
    //
    public function index(){
      //$typebooks = Typebooks::all();
      //$typebooks = Typebooks::orderBy('id','desc')->get();
      $count = Typebooks::count();
      //$typebooks = TypeBooks::simplePaginate(5);
      $typebooks = TypeBooks::paginate(5);
      return view('typebooks.index',[
        'typebooks' => $typebooks,
        'count' => $count
      ]);
    }

    public function destroy($id){
      //TypeBooks::find($id)->delete();
      TypeBooks::destroy($id);
      return back();
    }
}
