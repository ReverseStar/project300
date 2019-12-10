<?php

namespace StudentsForum\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function notifications()
    {
        //mark all as read
        auth()->user()->unreadNotifications->markAsRead();

        //getting notifications
        //dd(auth()->user()->notifications->first()->data['discussion']['slug']);
        //dd(auth()->user()->notifications());

        //display all notifications
        return view('users.notifications',[
            'notifications' => auth()->user()->notifications()->paginate(5)
        ]);
    }
}
