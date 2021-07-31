<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activite;
use App\Models\Contact;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'titre' => 'required|min:4',
            'contenu' => 'required|min:20',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $activite = new Activite();

        if ($request->file('image')) {
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(720,480);
            $image_resize->save('uploads/activites/'. $filename);
            $activite->image = $filename;

            $activite->titre = $request->titre;
            $activite->contenu = $request->contenu;
            $activite->user_id = Auth::user()->id;
            $activite->save();

        }

        if ($activite != null) {
            return redirect()->back()->with(session()->flash('status', "Activité ajoutée avec succès"));

        }
    }


    public function liste()
    {
        $activites=Activite::with('user')->orderByDesc('created_at')->get();
        return view('admin.liste', compact('activites'));
    }

    public function showFormEditActivite($id)
    {
        $activite = Activite::find($id);

        return view('admin.edit', compact('activite'));
    }

    public function updateActivite(Request $request)
    {
         $validateData = $request->validate([
            'titre' => 'required|min:4',
            'contenu' => 'required|min:20',
            'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $activite = Activite::find($request->id);

        if ($request->file('image')) {
            unlink(public_path('uploads/activites/' . $activite->image));
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(720,480);
            $image_resize->save('uploads/activites/'. $filename);
            $activite->image = $filename;
        }
            $activite->titre = $request->titre;
            $activite->contenu = $request->contenu;
            $activite->user_id = Auth::user()->id;
            $activite->save();


        return redirect()->route('admin.liste')->with(session()->flash('activite_update', 'Activité modifiée avec success'));

    }

    public function supprimerActivite($id)
    {

        $activite = Activite::findOrFail($id);
        unlink(public_path('uploads/activites/' . $activite->image));
        $activite->delete();

        return redirect()->route('admin.liste')->with(session()->flash('activite_delete', 'Votre activité a été supprimer avec success '));

    }


    public function listeCompte()
    {
        $users=User::with('role')->orderByDesc('created_at')->where('role_id', '!=', 1)->get();
        return view('admin.compte', compact('users'));
    }
     public function showFormUser()
    {
        return view('admin.register');
    }
    public function createCompte(Request $request)
    {
         $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
             'role_id' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('admin.compte')->with(session()->flash('compte_creer', 'Compte ajouté avec success '));

    }

    public function supprimerUser($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.compte')->with(session()->flash('compte_delete', 'Votre activité a été supprimer avec success '));

    }

     public function showFormEditUser($id)
    {
        $user = User::find($id);

        return view('admin.editUser', compact('user'));
    }

    public function updateUser(Request $request)
    {
         $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
             'role_id' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('admin.compte')->with(session()->flash('compte_update', 'Utilisateur modifiée avec success'));

    }

     public function listContact()
    {
        $contacts=Contact::orderByDesc('created_at')->get();
        return view('admin.listeContact', compact('contacts'));
    }

      public function supprimerContact($id)
    {

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('liste.contact')->with(session()->flash('contact_delete', 'Cet contact viens d\'être supprimer avec success '));

    }


}
