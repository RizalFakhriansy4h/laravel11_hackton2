<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    protected $data;

    public function __construct()
    {
        $user = Auth::user();

        $this->data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'photo_profile' => $user->photo_profile,
            'link_ig' => $user->link_ig,
            'bio' => $user->bio,
            'job' => $user->job,
            'role' => $user->role,
            'created_at' => $user->created_at,
        ];
    }

    public function setViewDashboard()
    {
        $this->data['title'] = 'Dashboard';
        $this->data['admins'] = User::where('role', 1)->get();
        
        return view('dashboard',$this->data);
    }

    public function setViewEditProfile()
    {
        $this->data['title'] = 'Edit Profile';
        $this->data['allJobs'] = ['UI/UX','Digital Marketing','Front-end','Back-end'];

        return view('edit_profile',$this->data);
    }
    
    public function setViewChangePass()
    {
        $this->data['title'] = 'Change Password';

        return view('change_pass',$this->data);
    }
    
    public function setViewMembers()
    {
        $this->data['title'] = 'All Members';
        $this->data['allMembers'] = User::where('role', 0)->get();

        return view('members',$this->data);
    }

    public function setViewProfile(Request $request)
    {
        
        $encryptedEmail = $request->query('email');
        
        $email = Crypt::decrypt($encryptedEmail);
        
        $this->data['user'] = User::where('email', $email)->first();
        
        $this->data['title'] = 'Profile ' . $this->data['user']->name;
        
        return view('profile', $this->data);

    }

    public function setViewSpeakers()
    {
        $this->data['title'] = 'All Speakers';
        $this->data['allSpeakers'] = Speaker::all();
        
        return view('speakers',$this->data);
    }
    
    public function setViewEvents()
    {
        $this->data['title'] = 'All Events';

        $this->data['allSpeakers'] = Speaker::all();
        $this->data['allEvents'] = Event::all();

        return view('events',$this->data);
    }
    
    public function setViewEditSpeaker(Request $request)
    {
        $encryptedId = $request->query('id');

        $id = Crypt::decrypt($encryptedId);
        
        $this->data['speaker'] = Speaker::where('id', $id)->first();

        $this->data['title'] = 'Edit Speaker ' . $this->data['speaker']->name;
        
        return view('edit_speaker',$this->data);

    }
    
    public function setViewEditEvent(Request $request)
    {
        $encryptedId = $request->query('id');

        $id = Crypt::decrypt($encryptedId);
        
        $this->data['allSpeakers'] = Speaker::all();
        $this->data['event'] = Event::where('id', $id)->first();


        $this->data['title'] = 'Edit Event ' . $this->data['event']->title;
        
        return view('edit_event',$this->data);

    }

    public function updateSpeaker(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'social_media' => 'nullable|string|max:255',
            'photo_profile' => 'nullable|image',
        ]);

        $speaker = Speaker::findOrFail($id);

        $speaker->name = $request->name;
        $speaker->social_media = $request->social_media;

        if ($request->hasFile('photo_profile')) {
            $photoPath = '/storage/' . $request->file('photo_profile')->store('speakers', 'public');
            $speaker->photo_profile = $photoPath;
        }

        // Simpan perubahan
        $speaker->save();

        return redirect( route('speakers') )->with('message', 'Speaker updated successfully!');
    }

    public function destroySpeaker($id)
    {
        Speaker::findOrFail($id)->delete();

        return redirect( route('speakers') )->with('message', 'Speaker deleted successfully!');
    }

    public function destroyUser($id)
    {
        User::findOrFail($id)->delete();

        return redirect( route('members') )->with('message', 'Member deleted successfully!');
    }
    
    public function destroyEvent($id)
    {
        Event::findOrFail($id)->delete();

        return redirect( route('events') )->with('message', 'event deleted successfully!');
    }

    public function editProfile(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'link_ig' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:255',
            'job' => 'nullable|string|max:255',
            'photo_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();

        // Update data pengguna
        $user->name = $request->name;
        $user->link_ig = $request->link_ig;
        $user->bio = $request->bio;
        $user->job = $request->job;

        // Proses file foto profil jika ada
        if ($request->hasFile('photo_profile')) {
            $photoPath = '/storage/' . $request->file('photo_profile')->store('profile_photos', 'public');
            $user->photo_profile = $photoPath;
        }

        $user->save();

        return redirect()->back()->with('message', 'Profil berhasil diperbarui.');
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'current_pass' => 'required',
            'new_pass' => 'required|min:8',
            'confirm_pass' => 'required|same:new_pass',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_pass, $user->password)) {
            return redirect()->back()->with('message', 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->new_pass);
        $user->save();

        return redirect()->back()->with('message', 'Password changed successfully.');
    }

    public function addSpeakers(Request $request)
    {
        $request->validate([
            'photo_profile' => 'required|image',
            'name' => 'required|string|max:255',
            'social_media' => 'nullable|string|max:255',
        ]);

        $photoPath = '/storage/' . $request->file('photo_profile')->store('speakers', 'public');

        $speaker = new Speaker();
        $speaker->name = $request->name;
        $speaker->social_media = $request->social_media;
        $speaker->photo_profile = $photoPath;
        $speaker->save();

        return redirect()->back()->with('message', 'Speaker added successfully!');
    }

    public function addEvent(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255', 
            'thumbnail' => 'required|image', 
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after:start_datetime',
            'speaker1' => 'nullable|string|max:255',
            'speaker2' => 'nullable|string|max:255',
            'speaker3' => 'nullable|string|max:255',
            'speaker4' => 'nullable|string|max:255',
        ]);

        $slug = Str::slug($validatedData['title']) . '-' . now()->format('YmdHis');

        $creatorId = Auth::id();

        $photoPath = '/storage/' . $request->file('thumbnail')->store('thumbnail_event', 'public');

        $speakers = [
            $validatedData['speaker1'],
            $validatedData['speaker2'],
            $validatedData['speaker3'],
            $validatedData['speaker4'],
        ];

        $speakers = array_filter($speakers);
        
        $speakersJson = json_encode($speakers);

        $event = new Event();
        $event->title = $validatedData['title'];
        $event->description = $validatedData['description'];
        $event->location = $validatedData['location'];
        $event->thumbnail = $photoPath;
        $event->start_datetime = $validatedData['start_datetime'];
        $event->end_datetime = $validatedData['end_datetime'];
        $event->slug = $slug;
        $event->creator_id = $creatorId;
        $event->speakers_id = $speakersJson;
        $event->save();

        return redirect()->back()->with('message','Event Baru Berhasil di Buat !!');
    }

    public function editEvent(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'thumbnail' => 'nullable|image',
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after:start_datetime',
            'speaker1' => 'nullable|string|max:255',
            'speaker2' => 'nullable|string|max:255',
            'speaker3' => 'nullable|string|max:255',
            'speaker4' => 'nullable|string|max:255',
        ]);

        $event = Event::findOrFail($id);

        $event->title = $validatedData['title'];
        $event->description = $validatedData['description'];
        $event->location = $validatedData['location'];
        $event->start_datetime = $validatedData['start_datetime'];
        $event->end_datetime = $validatedData['end_datetime'];

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = '/storage/' . $request->file('thumbnail')->store('thumbnail_event', 'public');
            $event->thumbnail = $thumbnailPath;
        }

        $speakers = [
            $validatedData['speaker1'],
            $validatedData['speaker2'],
            $validatedData['speaker3'],
            $validatedData['speaker4'],
        ];

        $speakers = array_filter($speakers);

        $speakersJson = json_encode($speakers);

        $event->speakers_id = $speakersJson;

        $event->save();

        return redirect('events')->with('message','Event Baru Berhasil di Edit !!');
    }



}
