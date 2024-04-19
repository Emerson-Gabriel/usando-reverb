<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        event(new \App\Events\BroadcastTestEvent('Mensagem de teste Rafa!'));
        return response()->json(['message' => 'Mensagem de teste enviada.']);
    }
}
