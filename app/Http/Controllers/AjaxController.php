<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Session;
class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    // public function registration()
    // {
    //     return view('registration');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'fname'=>'required',
                'lname'=>'required',
                'uemail'=>'required|email',
                'phone'=>'required',
                'gender'=>'required',
                'dob'=>'required',
                'country'=>'required',
                'city'=>'required',
                'state'=>'required',
                'userName'=>'required',
                'userPass'=>'required',
            ]
        );
        

   
        $model=new Ajax();

        // $filename = time().".".$request->file('image')->getClientOriginalExtension();
        // $request->file('image')->move(public_path().'/uploads/user/',$filename);
        
        $model->First_name=$request->post('fname');
        $model->Last_name=$request->post('lname');
        $model->email=$request->post('uemail');
        $model->phoneNO=$request->post('phone');

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('uploads/user/',$filename);
            $model->image=$filename;
        }
        // $model->image=$request->file('image');

        $model->address=$request->post('address');
        $model->hobbies=json_encode($request->post('hobbies'));
        $model->gender=$request->post('gender');
        $model->dob=$request->post('dob');
        $model->country=$request->post('country');
        $model->state=$request->post('state');
        $model->city=$request->post('city');
        $model->userName=$request->post('userName');
        $model->password= Hash::make($request->post('userPass'));
        $model->save();

        
        return redirect('/login')->withSuccess("Registration SuccessFul");


    }

    /**
     * Display the specified resource.
     */
    public function show(Ajax $ajax,)
    {
        $ajax = Ajax::get();
        $data = array();
        if(Session::has('loginId')){
            $data = Ajax::where('id','=',Session::get('loginId'))->first();
        }
        return view('userData',['userData'=>$ajax]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Ajax::where('id',$id)->first();
            return view('editUser',['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
         $request->validate(
            [
                'fname'=>'required',
                'lname'=>'required',
                'uemail'=>'required|email',
                'phone'=>'required',
                'gender'=>'required',
                'dob'=>'required',
                'country'=>'required',
                'city'=>'required',
                'state'=>'required',
                'userName'=>'required',
                'userPass'=>'required',
            ]
        );

        $model = Ajax::where('id',$id)->first();
        $model->First_name=$request->post('fname');
        $model->Last_name=$request->post('lname');
        $model->email=$request->post('uemail');
        $model->phoneNO=$request->post('phone');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('uploads/user/',$filename);
            $model->image=$filename;
        }
        $model->address=$request->post('address');
        $model->hobbies=json_encode($request->post('hobbies'));
        $model->gender=$request->post('gender');
        $model->dob=$request->post('dob');
        $model->country=$request->post('country');
        $model->state=$request->post('state');
        $model->city=$request->post('city');
        $model->userName=$request->post('userName');
        $model->password= Hash::make($request->post('userPass'));
        $model->save();


        return redirect('/userData')->withSuccess("User Data Updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Ajax::where('id',$id)->first();
        $user->delete();
        return back()->withSuccess('Product Delete');
    }

    public function authUser(Request $request){

        $request->validate(
            [
                'UserName'=>'required',
                'password'=>'required',
            ]);

            $user = Ajax::where('userName','=',$request->UserName)->first();

            if($user){
                if(Hash::check($request->password, $user->password)){
                    $request->session()->put('loginId',$user->id);

                    return redirect('/userData')->withSuccess("Login SuccessFul");
                }
                else
                {
                    return back()->with('fail','Password Incorect');
                }
            }
            else
            {
                return back()->with('fail','The User Name is invalid');
            }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
    }
}
