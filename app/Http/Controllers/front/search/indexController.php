<?php

namespace App\Http\Controllers\front\search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kitaplar;

class indexController extends Controller
{
    public function index()
    {
        if ($_GET['q']!="") {
            $q = $_GET['q'];
            $data = Kitaplar::where('name','like','%'.$q.'%')->paginate(10);
            return view('front.search.index',['data'=>$data]);
        } else {
            return redirect('/');
        }
        
    }
}
