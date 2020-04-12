<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $pagetitle='صفحه ویرایش کاربر';
        return view('auth.profile' ,compact('pagetitle','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $messages=[
            'name.required'=>'نام را وارد نمایید',
            'email.required'=>'ایمیل را وارد کنید',
            'phone.required'=>'تلفن را وارد کنید',
           
        ];
        if(!empty($request->password)){
            $validateData=$request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required'
                
            ],$messages);

            $password=Hash::make($request->password);
            $user->password=$password;
        }else{
            $validateData=$request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required'
                
            ],$messages);
        }
        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;

       try {
         //  $category->update($request->all());
       $user->save();
       } catch (Exception $exception) {
        return redirect()->back()->with('warning', $exception->getCode());
       }
 
       $msg='آپدیت شد';
       return redirect()->back()->with('success', $msg);
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
