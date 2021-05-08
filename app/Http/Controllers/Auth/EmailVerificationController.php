<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\AuthorizationException;

class EmailVerificationController extends Controller
{
    private $user;

    /**
     * @throws AuthorizationException
     */
    public function __invoke(string $id, string $hash)
    {
        if($user = User::find($id)){

            $this->user = $user;
            Auth::login($this->user);

            if (!hash_equals((string) $id, (string) Auth::user()->getKey())) {
                throw new AuthorizationException();
            }

            if (!hash_equals((string) $hash, sha1(Auth::user()->getEmailForVerification()))) {
                throw new AuthorizationException();
            }

            if (Auth::user()->hasVerifiedEmail()) {
               $this->redirectPath();
            }

            if (Auth::user()->markEmailAsVerified()) {
                event(new Verified(Auth::user()));
            }

        }else{
            throw new AuthorizationException();
        }

        return redirect()->route('password.request');
    }

    public function redirectPath()
    {
        if(Auth::check())
        {
            if(Auth::user()->hasRole('admin')){

                return redirect()->route('admin.dashboard');

            }else{

                return redirect()->route('home');

            }
        }

        return redirect()->route('login');
    }
}
