<?php
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use DB;
class FrontendController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('frontend.index')->with('products',$products);
    }

    public function mystery(){
      $products = Product::all();
      return view('frontend.mystery')->with('products',$products);
    }
}
