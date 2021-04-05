<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edit;

class MainController extends Controller
{
    public function index()
    {
        $firstSec = Edit::all()->first();
        $secondSec =  Edit::all()->skip(1)->first();
        $thirdSec =  Edit::all()->skip(2)->first();
        $fourthSec =  Edit::all()->skip(3)->first();
        $fifthSec =  Edit::all()->skip(4)->first();
        return view('home' , ['firstSec' => $firstSec, 'secondSec' => $secondSec, 'thirdSec' => $thirdSec , 'fourthSec' => $fourthSec ,'fifthSec' => $fifthSec] );
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    

    function show()
    {
        $data = Edit::all();
        return view('edit_page', ['edits' => $data]);
    }


    function showData($id)
    {
        $data = Edit::find($id);
        return view('update', ['data' => $data]);
    }

    function update(Request $req)
    {
        $data = Edit::find($req->id);
        $data->header = $req->header;
        $data->text = $req->text;
        $data->save();
        return redirect('edit_page');
    }
}
