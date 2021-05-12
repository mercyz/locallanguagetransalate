<?php

use App\Models\Language;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::truncate();
        $languages = [
            "person" => "nee",
            "take" => "su",
            "come" => "lu",
            "work" => "tam",
            "market" => "du",
            "mother" => "ka",
            "hat" => "pegere",
            "cap" => "pegere",
            "love" => "wereloo",
            "house" => "to",
            "borrow" => "bogora"
        ];
        foreach($languages as $key => $lang){
            factory(Language::class)->create([
                "english" => $key,
                "khana" => $lang,
                "reference" => Str::random(5)
            ]);
        }

        // $getLanguages = Language::all();
        // foreach($getLanguages as $lan){
        //         $lan->update([
        //             ""
        //         ]);
        // }
    }
}
