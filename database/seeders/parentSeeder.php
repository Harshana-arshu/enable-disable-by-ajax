<?php

namespace Database\Seeders;

use App\Models\Parents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class parentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent=new Parents;
        $parent->name='John';
        $parent->email='John@gmail.com';
        $parent->save();

        $parent=new Parents;
        $parent->name='Tom';
        $parent->email='tom@gmail.com';
        $parent->save();

        $parent=new Parents;
        $parent->name='Joy';
        $parent->email='joy@gmail.com';
        $parent->save();

        $parent=new Parents;
        $parent->name='adam';
        $parent->email='Adam@gmail.com';
        $parent->save();
    }
}
