<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use Intervention\Image\Facades\Image;

class AdminClientsController extends Controller
{

    public function browse()
    {
        return view('admin.clients')->with('clients', Client::with('orders')->get());
    }

    /**
     * Creer un client
     *
     * @param Request $request
     * @return view
     */
    public function create(Request $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make('12345678'),
        ]);
        Client::create([
            'user_id' => $user->id
        ]);
        return back();
    }

    /**
     * Creer un client
     *
     * @param Request $request
     * @return view
     */
    public function update(int $id, Request $request)
    {
        $client = Client::find($id);
        $clientdetails = $client->details;
        $clientdetails->first_name = $request->first_name;
        $clientdetails->last_name = $request->last_name;
        $clientdetails->email = $request->email;
        $clientdetails->address = $request->address;
        $clientdetails->phone = $request->phone;
        if ($request->has('image')) {
            $clientdetails->image = $this->uploadImage($client->user_id, $request);
        }
        $clientdetails->save();
        return back();
    }
    
    /**
     * suprimer un client
     *
     * @param integer $id
     * @return view
     */
    public function delete(int $id)
    {
        User::destroy($id);
        return redirect(route('admin.clients'));
    }

    /**
     * upload l'image du profile
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    private function uploadImage(int $id, Request $request)
    {
        $photo = $request->file('image');
        $filename = $id . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(128, 128)->save(public_path('storage/uploads/users/' . $filename));
        return $filename;
    }
}
