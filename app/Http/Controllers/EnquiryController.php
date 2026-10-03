<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data=Enquiry::all();
        return view("showcontact",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contactus");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enq=$request->validate([
        "name"=>"required|alpha",
        "email"=>"required|email",
        "phone"=>"required",
        "message"=>"required"
        ]);
        Enquiry::create($enq);
        return back()->with("success","we will contact you ,1n 24 hours");

    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
         echo $request->id;

        $enquiry=Enquiry::find($request->id);
        return view('editcontact',compact("enquiry"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
          $enqyiry=Enquiry::find($request->id);
         $enqyiry->name=$request->name;
         $enqyiry->email=$request->email;
        $enqyiry->phone=$request->phone;
        $enqyiry->message=$request->message;
        $enqyiry->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Enquiry::destroy($request->id);
        return redirect("/admin/contact");       
    }
}
