<?php namespace doelivros\Http\Controllers;

use doelivros\Http\Requests;
use doelivros\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use Laravel\Socialite\Facades\Socialite;

class AccountController extends Controller {


    public function github_redirect(){
        return Socialite::with('github')->redirect();
    }

    public function github(){
        $user = Socialite::with('github')->user();

        dd($user);
    }
    public function facebook_redirect(){
        return Socialite::with('facebook')->redirect();
    }

    public function facebook(){
        $user = Socialite::with('facebook')->user();

        dd($user);
    }

    public function twitter_redirect(){
        return Socialite::with('twitter')->redirect();
    }

    public function twitter(){
        $user = Socialite::with('twitter')->user();

        dd($user);
    }
}
