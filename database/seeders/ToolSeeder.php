<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 6; $i++) {
            $file = 'tool-'.$i.'.jpg';
            File::copy(resource_path('images/gallery-'.$i.'.jpg'), storage_path('app/public/' . $file));

            Tool::factory()->create([
                'path' => '/' . $file,
            ]);
        }
    }
}
