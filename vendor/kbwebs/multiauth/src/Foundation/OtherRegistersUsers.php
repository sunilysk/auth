<?php

namespace Kbwebs\MultiAuth\Foundation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait OtherRegistersUsers
{
    use RedirectsOther;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('other.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::other()->login($this->create($request->all()));

        return redirect($this->redirectotherPath());
    }
}
