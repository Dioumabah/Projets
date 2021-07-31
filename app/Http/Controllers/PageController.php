<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $activites=Activite::with('user')->orderByDesc('created_at')->paginate(6);
        return view('index', compact('activites'));
    }

    public function contact()
    {
        return view('site.contact');
    }
    public function createContact(Request $request)
    {
         $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:contacts',
            ],
            'subject' => ['required', 'min:4'],
            'message' => ['required', 'string', 'min:8'],
        ]);
        $user = new Contact();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->subject = $request->subject;
        $user->message = $request->message;
        $user->save();
        return redirect()->route('contact')->with(session()->flash('contact_creer', 'Votre message a été bien envoyé. Merci !'));

    }


    public function vision()
    {
        return view('site.vision-mission-buts');
    }

    public function impact()
    {
        return view('site.impact-social');
    }

    public function financements()
    {
        return view('site.financements');
    }
    public function positionnement()
    {
        return view('site.positionnement');
    }
    public function approche()
    {
        return view('site.approche-expertise');
    }

     public function renforcement()
    {
        return view('site.renforcement-des-capacites');
    }
     public function promotion()
    {
        return view('site.promotion-sante');
    }
     public function plaidoyer()
    {
        return view('site.plaidoyer');
    }


     public function detailActivite($slug)
    {
        $activite = Activite::with('user')->find($slug);
        $activites=Activite::with('user')->orderByDesc('created_at')->limit(5)->get();
        return view('site.activite-detail', compact('activite', 'activites'));
    }

    public function search(Request $request)
    {
        $datas = Activite::select("titre")
                            ->where("titre", "LIKE", "%{$request->terms}%")
                            ->get();
        return response()->json($datas);
    }
}
