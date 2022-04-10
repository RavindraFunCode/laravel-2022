<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo get_formetted_date("2022-04-08 09:10:42", "d-M-Y");die;
        $users  = User::paginate(10);
        // p($users->toArray());die;
        return view('user-list', compact('users'));
        //or
        // $data = compact('users');
        // return view('user-list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('user.register');
        $title = "Add User";
        $user = '';
        return view('form-component', compact('user', 'url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'city'=>'required',
            'state'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);

        $user = new User;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->password = md5($request['password']);

        $user->save();

        return redirect('web/user-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return redirect('user-list');
        }
        $url = route('user.update', ['id'=>$id]);
        $title = "Edit User";

        return view('form-component', compact('user', 'url', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'city'=>'required',
            'state'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);

        $user = User::find($id);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->password = md5($request['password']);

        $user->save();

        return redirect('web/user-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        $user = User::find($id);
        if(!is_null(($user))){
            $user->delete();
        }
        return redirect('web/user-list');
    }

    public function trash()
    {
        // $users  = User::withTrashed()->all();
        $users  = User::onlyTrashed()->get();

        return view('user-trash-list', compact('users'));
    }
    public function forceDelete($id)
    {
        $user = User::withTrashed()->find($id);
        if(!is_null(($user))){
            $user->forceDelete();
        }
        return redirect('web/user-list/trash');
    }
    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
        // p($user);die;
        if(!is_null(($user))){
            $user->restore();
        }
        return redirect('web/user-list/trash');
        
    }
}
