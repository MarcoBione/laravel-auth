<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('dbdata');

        foreach($data as $item){
            $newItem = new Dashboard();

            $newItem->title = $item['title'];
            $newItem->thumb = $item['thumb'];
            $newItem->description = $item['description'];
            $newItem->link = $item['link'];

            $newItem->save();
    }
}
}
