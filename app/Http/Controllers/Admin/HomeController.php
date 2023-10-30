<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Messages;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $messages = Messages::get();
        return view('index',['messages' => $messages]);
    }

    public function home()
    {
        return view('website.home');
    }

    public function aboutus()
    {
        return view('website.aboutus');
    }

    public function booking()
    {
        return view('website.booking');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function setting()
    {
        return view('dashboard.setting.index');
    }

    public function changeLang($lang)
    {
        $admin = User::where('id', auth()->user()->id)->first();
        $admin->lang = $lang;
        $admin->save();
        return redirect()->back();
    }
}
