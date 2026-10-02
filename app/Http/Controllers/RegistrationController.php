<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegistrationController extends Controller
{
        public function create(): View
    {
        return view('registrations.create');
    }

}
