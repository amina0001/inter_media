<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersCrudController extends Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        $this->middleware('admin')->only(['add', 'create']);
    }

    /**
     * apercue le profile du client
     *
     * @param integer $id
     * @return view
     */
    public function profile(int $id)
    {
        $user = User::with(['client', 'technician'])->find($id);
        return view('users.profile')->with(['user' => $user]);
    }

    /**
     * mes a jour d'utilisateur
     *
     * @param Request $request
     * @param integer $id
     * @return void
     */
    public function update(Request $request, int $id)
    {
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if ($request->has('image')) {
            $user->image = $this->updateImage($user->id, $request);
        }
        $user->save();
        Session::flash('success', 'Mis a jour est succee!');
        return back();
    }

    /**
     * obtient les commandes du client
     *
     * @param integer $id
     * @return void
     */
    public function orders(int $id)
    {
        $orders = Client::where('user_id', $id)->first()->orders;
        return view('users.orders')->with(['orders' => $orders]);
    }

    

    /**
     * upload l'image du profile
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    private function updateImage(int $id, Request $request)
    {
        $photo = $request->file('image');
        $filename = $id . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(128, 128)->save(public_path('storage/uploads/users/' . $filename));
        return $filename;
    }
}
