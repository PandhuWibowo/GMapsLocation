<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gm;
class GmController extends Controller
{
    //
    public function index(){
      return view('maps.index');
    }

    public function store(Request $request){
        $data = new Gm();
        $data->lat          = $request->lat;
        $data->longt        = $request->longt;
        $data->description  = $request->description;
        // $data->email = $request->email;
        $data->save();
        return redirect('formgooglemaps');
    }
}
