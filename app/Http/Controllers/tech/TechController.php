<?php

namespace App\Http\Controllers\tech;

use Illuminate\Http\Request;
use App\Models\Addservice;
use App\Models\Team;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TechController extends Controller
{
    public function home(Request $request){
        return view('tech.index');
    }
    public function about(Request $request){
        return view('tech.about');
    }
    public function service(Request $request){
        $data['getRecord'] = Addservice::all();
        return view('tech.service', $data);
    }
    public function team(Request $request){
        $data['getRecord'] = Team::all();
        return view('tech.team',$data);
    }
    public function client(Request $request){
        return view('tech.client');
    }
    public function event(Request $request){
        return view('tech.event');
    }
    public function resource(Request $request){
        return view('tech.resource');
    }
    public function contact(Request $request){
        return view('tech.contact');
    }
}
