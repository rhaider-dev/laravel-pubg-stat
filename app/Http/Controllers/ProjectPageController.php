<?php

namespace App\Http\Controllers;

use App\Project;
use App\Testimonial;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    public function projects(){
        $projects=Project::latest()->paginate(6);
        $testimonials=Testimonial::where('status','active')->latest()->take(4)->get();

        return view('projects',compact('projects','testimonials'));
    }

    public function singleproject($slug){
        $project=Project::where('slug',$slug)->firstorfail();
        $projects=Project::where('slug','!=',$slug)->inRandomOrder()->take(2)->get();
        return view('project',compact('project','projects'));
    }
}
