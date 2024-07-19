<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\Contact;
use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Models\Job;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function read()
    {
        $jobs = Job::all();
        return view('profil', compact('jobs'));
    }

    public function index()
    {
        $content = Home::latest()->first();
        return view('welcome', compact('content'));
    }

    public function sendEmail(Request $request)
    {
        // Validasi data form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pesan' => 'required',
        ]);

        // Ambil data dari form
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $pesan = $request->input('pesan');

        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->pesan = $pesan;
        $contact->save();
        
        // Kirim email menggunakan Mailable
        Mail::to($email)->send(new sendEmail($name, $email, $phone, $pesan));

        // Redirect atau return response sesuai kebutuhan
        return redirect()->route('contact.public')->with('status', 'Email berhasil dikirim!');
    }
}

