<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 6; $i++) {
            $file = 'gallery-'.$i.'.jpg';
            File::copy(resource_path('images/' . $file), storage_path('app/public/' . $file));

            Gallery::factory()->create([
                'path' => '/' . $file,
            ]);
        }
    }
}
