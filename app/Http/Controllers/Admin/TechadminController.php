<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\Smtp;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Addservice;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Blogimage;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Log;
use App\Models\Contentblog;
use App\Models\Team;

class TechadminController extends Controller
{
    public function service_list()
    {
        $data['getRecord'] = Addservice::all();
        $data['header_title'] = "Admin List";

        return view('admin.tech.servicelist', $data);
    }
    public function service_add(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        Addservice::create([
            'image' => $filename,
            'title' => $request->title,
            'description' => $request->description

        ]);
        return redirect('admin/addservice/list')->with('success', 'uploaded successfully.');
    }
    public function service_update(Request $request,$id)
    {
        $user = Addservice::find($id);
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        else{
            $filename=$user->image;
        }
        $user->image=$filename;
        $user->title=$request->title;
        $user->description=$request->description;
        $user->save();
        return redirect('admin/addservice/list')->with('success', 'updated successfully.');
    }
    public function admin_add_delete($id)
    {
        $user = Addservice::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function edit($id)
    {
        $record = Addservice::find($id);
        return response()->json($record);
    }
    public function team_list()
    {
         $data['getRecord'] = Team::all();
        $data['header_title'] = "Admin List";

        return view('admin.tech.teamlist', $data);
    }
    public function team_add(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        Team::create([
            'image' => $filename,
            'name' => $request->name,

        ]);
        return redirect('admin/addteams/list')->with('success', 'uploaded successfully.');
    }
    public function teams_update(Request $request,$id)
    {
        $user = Team::find($id);
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        else{
            $filename=$user->image;
        }
        $user->image=$filename;
        $user->name=$request->name;
        $user->save();
        return redirect('admin/addteams/list')->with('success', 'updated successfully.');
    }
    public function teamdelete($id)
    {
        $user = Team::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function teamsedit($id)
    {
        $record = Team::find($id);
        return response()->json($record);
    }
}
