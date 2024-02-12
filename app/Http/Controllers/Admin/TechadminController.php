<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\Smtp;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Addservice;
use App\Models\Client;
use App\Models\blogsco;
use App\Models\raalcontact;
use App\Models\resource;



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

    public function client_list()
    {
        $data['getRecord'] = Client::where('is_client', 0)->get();
        $data['getRecord1'] = Client::where('is_client', 1)->get();

        $data['header_title'] = "Admin List";

        return view('admin.tech.client', $data);
    }
    public function client_add(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        Client::create([
            'image' => $filename,
            'is_client' => 0,

        ]);
        return redirect('admin/client/list')->with('success', 'uploaded successfully.');
    }
    public function client_update(Request $request,$id)
    {
        $user = Client::find($id);
       
        $user->title=$request->title;
        $user->description=$request->description;
        $user->save();
        return redirect('admin/client/list')->with('success', 'updated successfully.');
    }
    public function clientdelete($id)
    {
        $user = Client::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function testdelete($id)
    {
        $user = Client::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function test_add(Request $request)
    {
        
        Client::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_client' => 1,
        ]);
        return redirect('admin/client/list')->with('success', 'uploaded successfully.');
    }
    public function clientedit($id)
    {
        $record = Client::find($id);
        return response()->json($record);
    }


    public function bloglist(Request $request)
    {
        Blogimage::truncate();
        $data['getRecord'] = blogsco::all();
        return view('admin.sco.blogsco', $data);
    }
    public function create_blogsco(Request $request)
    {
        //  dd($request->all());
        $data = new blogsco();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->tech = $request->tech;

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        $data->image = $filename;
        $data->metatitle = $request->title;
        $data->metadescription = $request->description;
        $data->ogimage = $filename;
        $exists = blogsco::where('title', $request->title)->exists();
        if ($exists) {
            $randomNumber = rand(100, 999); // Generate a random three-digit number
            $data->slug = $request->title . $randomNumber;
        } else {
            $data->slug = $request->title;
        }
        if ($request->multiimage) {
            $idArray = explode(',', $request->multiimage);
            $filenames = Blogimage::whereIn('id', $idArray)->pluck('filename');
            $filenamesString = implode(',', $filenames->toArray());
            $data->multiimage = $filenamesString;
        }
        $data->save();
        // $blog->content_blog = $request->content_blog;
        $delete = $request->multiimage;
        $idArray = explode(',', $delete);
        Blogimage::whereIn('id', $idArray)->delete();
        return redirect('admin/event/eventlist')->with('success', ' Added successfully.');
    }
    public function event_delete($id, Request $request)
    {
        $image = blogsco::find($id);
        $image->delete();
        return redirect('admin/event/eventlist')->with('success', ' Deleted successful');
    }
    public function event_edit($id, Request $request)
    {
        Blogimage::truncate();
        
        $data['getRecord'] = blogsco::find($id);
        if ($data['getRecord'] && $data['getRecord']->multiimage) {
            $imageArray = explode(',', $data['getRecord']->multiimage);
            foreach ($imageArray as $imageName) {
                $blogImage = new BlogImage;
                $blogImage->filename = $imageName;
                $blogImage->save();
            }
        }
        return view('admin.sco.edit_blogsco', $data);
    }
    public function event_update($id, Request $request)
    {
        $data = blogsco::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->tech = $request->tech;

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
            $data->image = $filename;
        } else {
            $data->image = $data->image;
        }
        if ($request->multiimage) {
            $idArray = explode(',', $request->multiimage);
            $existingFilenames = Blogimage::whereIn('id', $idArray)->pluck('filename')->toArray();

            $newFilenames = array_diff($idArray, $existingFilenames);

            $data->multiimage = implode(',', $existingFilenames);

            foreach ($newFilenames as $filename) {
                $blogImage = new Blogimage;
                $blogImage->filename = $filename;
                $blogImage->save();
            }
        }
        $data->save();

        Blogimage::truncate();
        return redirect('admin/event/eventlist')->with('success', ' updated');
    }
    //contact
    public function contact_list()
    {
         $data['getRecord'] = raalcontact::all();
        $data['header_title'] = "Admin List";

        return view('admin.tech.contactlist', $data);
    }
    public function contact_add(Request $request)
    {
        
        raalcontact::create([
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
            'title' => $request->title,


        ]);
        return redirect('admin/addcontact/list')->with('success', 'uploaded successfully.');
    }
    public function contact_update(Request $request,$id)
    {
        $user = raalcontact::find($id);
        $user->title=$user->title;
        $user->address=$request->address;
        $user->number=$request->number;
        $user->email=$request->email;
        $user->save();
        return redirect('admin/addcontact/list')->with('success', 'updated successfully.');
    }
    public function contactdelete($id)
    {
        $user = raalcontact::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function contactedit($id)
    {
        $record = raalcontact::find($id);
        return response()->json($record);
    }
//resource
public function resourcelist(Request $request)
    {
        // Blogimage::truncate();
        $data['getRecord'] = resource::all();
        return view('admin.tech.resource', $data);
    }
    public function create_resource(Request $request)
    {
        //  dd($request->all());
        $data = new resource();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
        }
        $data->image = $filename;      
        $data->save();
        return redirect('admin/resource/list')->with('success', ' Added successfully.');
    }
    public function resource_delete($id, Request $request)
    {
        $image = resource::find($id);
        $image->delete();
        return redirect('admin/resource/list')->with('success', ' Deleted successful');
    }
    public function resource_edit($id, Request $request)
    {
        // Blogimage::truncate();
        
        $data['getRecord'] = resource::find($id);
        return view('admin.tech.edit_resource', $data);
    }
    public function resource_update($id, Request $request)
    {
        $data = resource::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
            $data->image = $filename;
        } else {
            $data->image = $data->image;
        }
        $data->save();

        return redirect('admin/resource/list')->with('success', ' updated');
    }
   
}
