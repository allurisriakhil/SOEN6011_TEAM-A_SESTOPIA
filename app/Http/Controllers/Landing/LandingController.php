<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscribe;
use App\Mail\NewsletterSubscribtion;
use App\Models\Skill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function skills(Request $request, Skill $skill)
    {
        if ($request->skill) {
            return view('skills.show', \compact('skill'));
        }

        return view('skills.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        return view('search');
    }

    /**
     * Subscribe to newsletter.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Subscribe $request)
    {
        Mail::to($request->email)->send(new NewsletterSubscribtion());

        return response()->json([
            'subscribe' => true,
        ]);
    }
}
