<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $data;

    public function __construct()
    {

        
        $this->data = [
            'isLogged' => Auth::check(),
        ];
    }

    public function setViewHome()
    {
        $this->data['title'] = 'Home';
        $this->data['sposnsors'] = Sponsor::all();
        $this->data['events'] = Event::latest()->take(2)->get();    
    
        return view('landing.home',$this->data);
    }

    public function setViewBecomeSponsor()
    {
        $this->data['title'] = 'Become Our Sponsor';
        // $this->data['sposnsors'] = Sponsor::all();
        // $this->data['events'] = Event::latest()->take(2)->get();
        
        return view('landing.become_sponsor',$this->data);
    }
    
    public function setViewEventSlug(Request $request)
    {

        $slug = $request->query('title');

        $this->data['event'] = Event::where('slug', $slug)->first();

        $this->data['title'] = 'Event ' . $this->data['event']->title;
        
        return view('landing.event',$this->data);
    }

    public function sendMail(Request $request)
    {
        // Validasi data formulir jika diperlukan
        $request->validate([
            'message' => 'required|string',
        ]);

        // Kirim email
        Mail::raw($request->message, function ($message) {
            $message->to('fakhriansyahnugroho007@gmail.com')
                    ->subject("Hello i'am interesting for your event");
        });

        // Redirect dengan pesan sukses
        return redirect()->back();
    }
}
