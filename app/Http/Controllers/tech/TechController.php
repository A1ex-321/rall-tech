<?php

namespace App\Http\Controllers\tech;

use Illuminate\Http\Request;
use App\Models\Addservice;
use App\Models\Team;
use App\Models\Client;
use App\Models\resource;
use App\Http\Controllers\Controller;
use App\Models\blogsco;
use App\Models\raalcontact;
use App\Models\Gallery;


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
        $data['getRecord'] = Client::where('is_client', 0)->get();
        $data['getRecord1'] = Client::where('is_client', 1)->get();

        return view('tech.client',$data);
    }
    public function event(Request $request){
        $data['getRecord'] = blogsco::get();
        // dd($data['getRecord']);
        return view('tech.event',$data);
    }
    public function resource(Request $request){
        $data['getRecord'] = resource::get();
        //  dd($data['getRecord']);

        return view('tech.resource',$data);
    }
    public function contact(Request $request){
        $data['getRecord'] = raalcontact::get();
        //  dd($data['getRecord']);

        return view('tech.contact',$data);
    }
    public function singleevent(Request $request,$id){
        $data['getRecord'] = blogsco::find($id);
        //  dd($data['getRecord']);
        return view('tech.singleevent',$data);
    }
    public function singleresource(Request $request, $id) {
        $data['getRecordone'] = resource::find($id); // Fetch a specific resource by its ID
        $data['getRecord'] = resource::where('id', '!=', $id)->get(); // Fetch all resources except the one with the given ID
        return view('tech.singleresource', $data);
    }
    
    public function get_logo1()
    {
        try {
            $logo = Gallery::first();
            // dd($logo);
            if ($logo) {
                $image = asset('public/images/' . $logo->image);
                return response()->json(['image' => $image]);
                // dd($logo);

            } else {
                return response()->json(['error' => 'No record found in the Gallery table']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error']);
        }
    }
}
