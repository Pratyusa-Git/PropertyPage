<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Location;
use App\Models\ResidentalType;
use App\Models\CommercialType;
use App\Models\Builder;
use App\Models\Project;
use App\Models\CommercialSpace;
use App\Models\Blog;

class HomeController extends Controller
{
    //
    public function index(){
        $contactInfo = ContactUs::first();
        $locations = Location::all();
        $residentalTypes = ResidentalType::all();
        $commercialTypes = CommercialType::all();
        $builders = Builder::all();
        $commercials = CommercialSpace::with(['location','area'])->get();
        $topLocations = Location::topLocations();
        $topBuilders = Builder::topBuilders();
        $projects = Project::with(['location','area','residentType'])->get();
        $featuredProjects = Project::featuredProjects();
        $recentProjects = Project::recentProjects();
        $popularProjects = Project::popularProjects();
        $blogs = Blog::all();

        return view('home',compact('contactInfo','locations','residentalTypes','commercialTypes','topLocations','builders','blogs','projects','commercials','topBuilders','featuredProjects','recentProjects','popularProjects'));
    }
}
