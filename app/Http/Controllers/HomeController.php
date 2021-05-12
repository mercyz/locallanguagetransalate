<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function searchWord()
    {
        $validate =  Validator::make(request()->all(), ["word" => "required"]);
        if($validate->fails()){
            return response()->json([ "error" => "Please Fill in a word"], 422);
        }
        $language = request("lang");
        $word = Str::lower( request("word"));
        $getWord = Language::where($language, $word)->get();
        if($getWord == null){
            return response()->json(["error" => "Can't Find word in database"], 404);
        }
        return response()->json(["data" => $getWord], 200);
    }
}
