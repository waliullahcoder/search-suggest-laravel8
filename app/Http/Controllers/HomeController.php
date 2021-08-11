<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use DB;
class HomeController extends Controller
{
    public function userSearch(Request $request){

    $products=DB::table('products')->where('name', 'LIKE', "%{$request->keyword}%") 
    ->get();
    // if($users->count()>0){
    //     return view('welcome', compact('users'));
    // }else{
    //     $users=0;
    //     return view('welcome', compact('users'));
    // }
   
     echo "<ul id='country-list'>";

foreach($products as $item) {

echo "<a href='https://localhost/onixbd/search?q=$item->name' class='myurl'>". $item->name." | ".$item->photos ."</a>";
}
echo "</ul>";
      //  return response()->json($users);
       
    }
}
