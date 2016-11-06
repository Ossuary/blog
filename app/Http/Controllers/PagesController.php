<?php

namespace App\Http\Controllers;

use App\Post;
use Mail;
use Session;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.home')->withPosts($posts);
    }

    public function getAbout()
    {

        return view('pages.about');
    }
    public function getPortfolio()
    {

        return view('pages.portfolio');
    }

    public function getContacts()
    {
        return view('pages.contacts');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'subject'   => 'min:3',
            'message'   => 'min: 10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('pedrompsrodrigues@gamil.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your email was sent.');

        return redirect('/');

    }

}
