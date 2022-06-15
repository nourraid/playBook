<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('frontsite.edite_profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = ['name' => 'required|max:15|min:3',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'address' => 'required',
        ];

        $masseges = [
            'name.required' => 'name must be entered',
            'name.min' => 'name must more than 3 character',
            'name.max' => 'name must less than 15 character',
            'address.required' => 'address must be entered',
            'phoneNumber.required' => 'phone number must be entered',
            'email.required' => 'email must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->address = $request->address;

        if ($request->file('userImage') != null) {
            $ext = $request->file('userImage')->extension();
//            dd($ext);
            // || $ext != 'jpeg' || $ext != 'jfif' || $ext != 'pjpeg' || $ext != 'pjp' || $ext != 'png' || $ext != 'webp'
            if ($ext != 'jpg') {
                return redirect()->back()->with('error', 'your image must be image type !?');
            }
            $user_image = $request->file('userImage');
            $file_name = $user->phoneNumber. time() . '.' . $user_image->extension();
            $user_image->move('user_image', $file_name);
            $user->userImage = $file_name;
        }

        $user->save();

        return redirect()->route('profile' , $user)->with('success', 'your information Updated Successfully');;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->fav()->delete();
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User Deleted Successfully');
    }
}
