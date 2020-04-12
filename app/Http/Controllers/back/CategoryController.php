<?php

namespace App\Http\Controllers\back;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $categories=Category::orderBy('id','DESC')->get();
        $userName=User::orderBy('name')->get();
        return view('back.categories.categories',compact('categories','userName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category  $category)
    {
        $messages=[
            'name.required'=>'عنوان را وارد نمایید',
            'slug.required'=>'نام مستعار را وارد نمایید',
            'name.unique'=>'عنوان تکراری وارد کرده اید ،لطفا عنوان دیگری وارد کنید',
          
           
        ];
        $validateData=$request->validate([
            'name'=>'required|unique:categories',
            'slug'=>'required'
        ],$messages);
        //
      // $category=new Category([      این چندتا خط و خط 60  با همند برای ذخیره سازی
        //   'title'=>$request->get('title'),
        //   'description'=>$request->get('description'),
       //    'active'=>$request->get('active')
    //   ]);
       try {
       // $category->save();
        $category->create($request->all());
       } catch (Exception $exception) {
        return redirect(route('admin.categories.create'))->with('warning', $exception->getCode());
       }
 
       $msg='ذخیره شد تموم شد رفت';
       return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $messages=[
            'name.required'=>'عنوان را وارد نمایید',
            'slug.required'=>'نام مستعار را وارد نمایید',
           // 'name.unique'=>'عنوان تکراری وارد کرده اید ،لطفا عنوان دیگری وارد کنید',
        ];
        $validateData=$request->validate([
            'name'=>'required',
            'slug'=>'required'
        ],$messages);
        
       // $category->title=$request->title;     این چند تا خط به همراه خط 123 با هم هستند
       // $category->description=$request->description;
      //  $category->active=$request->active;

       try {
           $category->update($request->all());
      //  $category->save();
       } catch (Exception $exception) {
        return redirect(route('back.categories.edit'))->with('warning', $exception->getCode());
       }
 
       $msg='آپدیت شد';
       return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.categories'))->with('warning',$exception)->getcode();
        }
        $msg="حذف شد ";
        return redirect(route('admin.categories'))->with('seccess',$msg);
    }
}
