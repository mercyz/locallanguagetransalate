<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Language;


class DashboardController extends Controller
{
    public function index()
    {
        $languages = Language::where("status", "publish")->orderBy("english")->get()->all();
        return view("admin.language.index", compact("languages"));
    }
    public function store()
    {
        $data =  request()->validate(["english" => "required|string"]);
        $language = Language::create(array_merge($data,[
            "khana" => request("khana"),
            "gokana" => request("gokana"),
            "reference" => Str::random(8),
            "status" => 1
        ]));
        return back()->with("message", "New Word added successfully");
    }

    public function update($reference)
    {
        $data =  request()->validate(["english" => "required|string"]);
        $language = Language::where("reference", $reference)->first();
        if($language == null){
            return back()->with("message", "Can't Find Word");
        }
        $language->update(array_merge($data,[
            "khana" => request("khana"),
            "gokana" => request("gokana"),
            "status" => request("status"),
        ]));
        return back()->with("message", "Word Updated successfully");
    }

    public function destroy($reference)
    {
        $language = Language::where("reference", $reference)->first();
        $language->delete();
        return back()->with("message", "Word Deleted successfully");
    }
}
