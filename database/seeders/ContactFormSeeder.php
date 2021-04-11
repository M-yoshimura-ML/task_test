<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactForm;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //200個作成
        // factory(ContactForm::Class, 200)->create();
        for($i=0; $i < 100; $i++){
            ContactForm::factory()->create();
        }
    }
}
