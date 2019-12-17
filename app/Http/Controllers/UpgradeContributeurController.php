<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UpgradeContributeurController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        request()->validate([
          'contributeur' => ['required', 'exists:users,id']
        ]);
        $user = User::find(request('contributeur'));
        $user->makeContributeur();

        return redirect('/profile');
    }

}
