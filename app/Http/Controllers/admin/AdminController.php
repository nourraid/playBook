<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::orderByDesc('created_at')->paginate(5);
        return view('admin.admins.index', compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['name' => 'required|max:15|min:4',
            'password' => 'required|confirmed',
            'email' => 'required|email'];

        $masseges = [
            'name.required' => 'name must be entered',
            'name.min' => 'name must less than 15',
            'name.max' => 'name must more than 5',
            'email.required' => 'email must be entered',
            'password.confirmed' => 'password must be matched',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        Admin::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin Added Successfully');

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
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $rules = ['name' => 'required|max:15|min:4',
            'email' => 'required|email'];

        $masseges = [
            'name.required' => 'name must be entered',
            'name.min' => 'name must less than 15',
            'name.max' => 'name must more than 5',
            'email.required' => 'email must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $admin->name = $request->name;
        $admin->email = $request->email;

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin Updated Successfully');;

    }

    public function reset($id)
    {
        return view('admin.admins.resetpassword', compact('id'));
    }

    public function do_reset(Request $request, $id)
    {
        $admin = Admin::find($id);

        $rules = [
            'password' => 'required|confirmed',
            'old_password' => 'required',
        ];

        $masseges = [
            'old_password.required' => 'password must be entered',
            'password.required' => 'password must be entered',
            'password.confirmed' => 'password must be matched',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        if (Hash::check($request->old_password, $admin->password)) {
            $admin->password = Hash::make($request->password);
            $admin->save();
            return redirect()->route('admin.index')->with('success', 'Reset Password Admin Successfully');;
        } else {
            return redirect()->back()->withErrors('incorrect old password');
        }

    }

    public function login(Request $request)
    {
        $url = url()->previous();

        if (str_contains($url , 'admin')) {
            return view('admin.admins.login');
        }elseif (str_contains($url , 'user') && Auth::guest()){
            return view('frontsite.before_login');
        }
    }

    public function logout()
    {
        if (Auth::guard('webadmin')->check()) {
            Auth::guard('webadmin')->logout();
            return redirect()->route('login');
        }
    }

    public function authenticate(Request $request)
    {
        $login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::guard('webadmin')->attempt($login_data)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'invalid username or password');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin Deleted Successfully');
    }
}
