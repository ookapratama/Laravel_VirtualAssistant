<?php

namespace App\Http\Controllers\Chatbot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Asisten Virtual';
    }

    public function index() {
        $title = $this->title;
        return view('chat', compact('title'));
    }
}
