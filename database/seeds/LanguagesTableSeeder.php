<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    protected $languages = array('Javascript','PHP','Python','Swift','Golang','Dart','Ruby','C++','C#',);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->languages as $language) {

            Language::insert([
                'language' => $language,
            ]);
        }
    }
}
