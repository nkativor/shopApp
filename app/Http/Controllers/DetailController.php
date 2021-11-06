<?php

namespace App\Http\Controllers;
use App\Details;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
      return view('details.index');
    }

    public function store(Request $request)
    {
      $detail = new Details();
      $detail->gender = $request->input('gender');
      $detail->height = $request->input('height');
      $detail->d_birth = $request->input('d_birth');
      $detail->color = $request->input('color');
      $detail->w_size = $request->input('w_size');
      $detail->shirt_size = $request->input('shirt_size');
      $detail->trouser_length = $request->input('trouser_length');
      $detail->shoe_size = $request->input('shoe_size');
      $detail->save();
      return redirect()->route('orders.create');
    }
}
