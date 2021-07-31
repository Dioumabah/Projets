<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function activite()
    {
        $activites=Activite::with('user')->orderByDesc('created_at')->paginate(6);

        return view('site.activite', compact('activites'));
    }

    


     public function activiteDetail()
    {
        return view('site.activite-detail');
    }
}
