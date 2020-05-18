<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function field()
    {
        return view('pages.filiere');

    }

}
