<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Slider;
use App\Models\Ressume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();
        $services = Service::where('status', 1)
                       ->orderBy('created_at', 'desc')
                       ->get();
        $ressume = Ressume::latest()->first();
        $skills = Skill::all();
        $sliders = Slider::all();
        return view('frontend.pages.index', compact('sliders', 'ressume', 'portfolios', 'skills', 'services'));
    }

    // About page
    public function About()
    {
        $abouts = About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

        // About page
    public function Service()
    {
        $abouts = About::all();
           $services = Service::where('status', 1)
                       ->orderBy('created_at', 'desc')
                       ->get();
        return view('frontend.pages.service', compact('abouts', 'services'));
    }

       public function frontShow($slug)
    {
        $service  = Service::where('service_slug', $slug)->firstOrFail();
        $services = Service::where('status', 'active')->get(); // sidebar list
        return view('frontend.services.show', compact('service', 'services'));
    }

        public function pro()
    {
        $portfolios = Portfolio::all();
        return view('frontend.pages.project', compact('portfolios'));
    }
      // Contact page
    public function Contact()
    {
        return view('frontend.pages.contact');
    }
}
