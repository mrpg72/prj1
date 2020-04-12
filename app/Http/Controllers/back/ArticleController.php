<?php

namespace App\Http\Controllers\back;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('id','DESC')->get();
        return view('back.articles.articles',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all()->pluck('name','id');
        return view('back.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $messages=[
            'name.required'=>'عنوان را وارد نمایید',
            'slug.required'=>'نام مستعار را وارد نمایید',
            'name.unique'=>'عنوان تکراری وارد کرده اید ،لطفا عنوان دیگری وارد کنید',
          
           
        ];
        $validateData=$request->validate([
            'name'=>'required',
            'slug'=>'required'
        ],$messages);
        //
      // $category=new Category([      این چندتا خط و خط 60  با همند برای ذخیره سازی
        //   'title'=>$request->get('title'),
        //   'description'=>$request->get('description'),
       //    'active'=>$request->get('active')
    //   ]);
    $article=new Article();
       try {
       // $category->save();
       $article=$article->create($request->all());
      
        $article->categories()->attach($request->categories);
       } catch (Exception $exception) {
        return redirect(route('admin.articles.create'))->with('warning', $exception->getCode());
       }
 
       $msg='ذخیره شد مطلب تموم شد رفت ';
       return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories=Category::all()->pluck('name','id');
       return view('back.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $messages=[
        'name.required'=>'عنوان را وارد نمایید',
        'slug.required'=>'نام مستعار را وارد نمایید',
        'name.unique'=>'عنوان تکراری وارد کرده اید ،لطفا عنوان دیگری وارد کنید',


        ];
        $validateData=$request->validate([
        'name'=>'required',
        'slug'=>'required'
        ],$messages);
        //
      // $category=new Category([      این چندتا خط و خط 60  با همند برای ذخیره سازی
        //   'title'=>$request->get('title'),
        //   'description'=>$request->get('description'),
       //    'active'=>$request->get('active')
    //   ]);
       //  $article=new Article();
            try {
            // $category->save();
            $article->update($request->all());

            $article->categories()->sync($request->categories);

            } catch (Exception $exception) {
            return redirect(route('admin.articles.update'))->with('warning', $exception->getCode());
            }
 
       $msg='ذخیره شد مطلب تموم شد رفت ';
       return redirect(route('admin.articles'))->with('success', $msg);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function updatestatuse(Article $article){
        if ($article->statuse ==1) {
            $article->statuse=0;
        }else{
            $article->statuses=1;
        }
        $article->save();
        $msg='درست شد';
        return redirect(route('admin.articles'))->with('success', $msg);
    }
}
