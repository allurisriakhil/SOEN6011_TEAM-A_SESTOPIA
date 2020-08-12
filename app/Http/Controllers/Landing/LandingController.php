<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscribe;
use App\Mail\NewsletterSubscribtion;
use App\Models\Content;
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
        $results = ($this)::_search($request->q);

        return view('search', compact('results', $results));
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

    private static function _search($params)
    {
        $results = [];

        $skills = Skill::where('name', 'like', '%' . $params . '%')->orWhere('knowledge_area', 'like', '%' . $params . '%')->with('content')->get();
        $content = Content::where('name', 'like', '%' . $params . '%')->orWhere('classification', 'like', '%' . $params . '%')
            ->orWhere('prerequisites', 'like', '%' . $params . '%')
            ->orWhere('related_software_engineering_area', 'like', '%' . $params . '%')
            ->orWhere('rationale', 'like', '%' . $params . '%')
            ->orWhere('roles', 'like', '%' . $params . '%')
            ->orWhere('related_work', 'like', '%' . $params . '%')
            ->orWhere('real_world_example', 'like', '%' . $params . '%')
            ->orWhere('role_of_academia', 'like', '%' . $params . '%')
            ->orWhere('tools', 'like', '%' . $params . '%')
            ->orWhere('self_assessment', 'like', '%' . $params . '%')
            ->with('skill')
            ->get();

        $results = [
            'skills' => $skills,
            'content' => $content
        ];

        $count = $skills->count() + $content->count();

        $hasData = (!empty($results)) ? true : false;

        return (object) ['hasData' => $hasData, 'data' => $results, 'count' => $count, 'query' => $params];
    }
}
