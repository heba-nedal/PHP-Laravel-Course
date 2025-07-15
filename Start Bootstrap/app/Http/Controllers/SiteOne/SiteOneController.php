<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class SiteOneController extends Controller
{
    function home()
    {
        return view('SiteOne.home');
    }
    function services()
    {
        return view('SiteOne.services');
    }
    function portfolio()
    {
        return view('SiteOne.portfolio');
    }
    function about()
    {
        return view('SiteOne.about');
    }
    function contact()
    {
        return view('SiteOne.contact');
    }
    function postcontact(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'msg' => 'required',
        ]);

        /* 
        return view('SiteOne.ok'); // This is not correct because it remains in the same post URL! You need to change URL
        */
        //    $name = 'SiteOne_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalName();
        $name = 'SiteOne_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads'), $name);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $name,
            'msg' => $request->msg
        ]);

        return redirect()->route('site1.ok');
    }
    function ok()
    {
        return view('SiteOne.ok');
    }
    function viewContact()
    {
        $contact_rows = Contact::all();
        /*   return view('SiteOne.view_contact', [
            'contact_rows' => $contact_rows,
        ]);
        */
        //  return view('SiteOne.view_contact')->with('contact_rows', $contact_rows);\
        return view('SiteOne.view_contact', compact('contact_rows'));
    }

    function edit($id)
    {
        $old_contact = Contact::query()->findOrFail($id);
        return view('SiteOne.edit', compact('old_contact'));
    }

    function update(Request $request)
    {
        //dd($request->all());
        $new_contact = Contact::query()->findOrFail($request->id);
        $new_contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ]);

        if ($request->hasFile('image')) {
            $name = 'SiteOne_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $name);

            $new_contact->update([
                'image' => $name
            ]);
        }
        return redirect()->route('site1.viewcontact');
    }
}
