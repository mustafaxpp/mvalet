<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessagesRequest;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(StoreMessagesRequest $request)
    {
        $data = $request->except('_token' , '_method');
        Messages::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);
        session()->flash('success' , "Message Sent");
        return redirect()->route('website');
    }
}
