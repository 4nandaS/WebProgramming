<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Tool;
use App\Settings\ContactSettings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(ContactSettings $contactSettings)
    {
        $rawGallery = collect(Gallery::all());
        $firstGallery = $rawGallery->splice(0, 1);
        $lastGallery = $rawGallery->splice(-1, 1);
        // dd($galleries, $firstGallery, $lastGallery);

        $galleries = collect([
            $firstGallery,
            ...$rawGallery->splitIn(2),
            $lastGallery,
            ]);
        return view('pages.home', [
            'contact' => $contactSettings->toCollection(),
            'tools' => Tool::query()->latest()->get(),
            'galleries' => $galleries,
            'testimonials' => Testimonial::query()->latest()->get(),
        ]);
    }
}
