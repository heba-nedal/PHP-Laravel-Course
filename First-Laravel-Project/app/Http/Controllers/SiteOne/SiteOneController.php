<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{

    function home()
    {
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
    }

    function about()
    {
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
    }

    function contact()
    {
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
    }

    function msg($id)
    {
        //  return view('SiteOne.msg1')->with('id', $id);
        //  return view('SiteOne.msg2')->with('id', $id);
        /*  هادي الطريقة مش فعالة لو بدي أبعت متغيرات كتيرة
        return view('SiteOne.msg1')->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)
        ->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id)->with('id', $id);
        */
        /* وهادي الطريقة أيضا متعبة في حال كثرة المتغيرات
        return view('SiteOne.msg2', [
            'id' => $id
        ]);
        */
        return view('SiteOne.msg2', compact('id'));
    }
}
