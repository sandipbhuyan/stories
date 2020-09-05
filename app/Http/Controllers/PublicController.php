<?php

namespace App\Http\Controllers;

use App\Views;
use Illuminate\Http\Request;
use App\Stories;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Storage;
use Parsedown;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Stories::orderBy('id', 'desc')->where('is_published', 1)->paginate(20);
        return view('welcome')->with('posts', $posts);
    }

    public function showStory($id)
    {
        $userView = null;
        if (Auth::check()) {
            $userView = Views::where('sid', $id)->where('uid', Auth::id())->first();
            if (!$userView) {
                $view = new Views;
                $view->sid = $id;
                $view->uid = Auth::id();
                $view->liked = 0;
                $view->views = 1;
                $view->save();
                DB::table('stories')->where('id', $id)->increment('views');
            } else {
                DB::table('views')->where('id', $userView->id)->increment('views');

            }
        }
        $story = Stories::find($id);
        if ($story->is_published == 0) {
            return redirect("/");
        }
        $story->content = Parsedown::instance()->text(Storage::disk('general_uploads')->get($story->content));

        return view('story')
            ->with('story', $story)
            ->with('userDetails', $userView);
    }

    public function decreaseCurrentView($id)
    {
        $res = DB::table('stories')->where('id', $id)->decrement('currentViews');
        return response($res);
    }

    public function increaseView($id)
    {
        $res = DB::table('stories')->where('id', $id)->increment('currentViews');
        return response($res);
    }

    public function getCurrentView($id)
    {
        $details = Stories::find($id);
        return $details->currentViews;
    }
}
