<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function portfolio()
    {
        return view("page.portfolio");
    }
    public function success()
    {
        return view("page.success");
    }
    public function benefit()
    {
        return view("page.benefit");
    }
    public function awards()
    {
        return view("page.awards");
    }
    public function joinup()
    {
        return view("page.join-up");
    }
    public function required()
    {
        return view("page.position-required");
    }
}