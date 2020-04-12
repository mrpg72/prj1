@extends('back.indexAdmin')



@section('content')

<div class="page-wrapper" style="background-color:white;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">ویرایش مطلب</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
         
      
    </div>
<div>    <form action="{{route('admin.articles.update',$article->id)}}" 
    class="container" dir="rtl" method="POST"
     style="text-align:right;padding-top:100px;padding-bottom:100px;">
       @csrf
   <div class="form-group">
       <label>نام  مطلب جدید</label>
   <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$article->name}}" name="name">
       @error('name')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>
   
   <div class="form-group">
       <label>نام مستعار</label>
       <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{$article->slug}}" name="slug">
       @error('slug')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>
   <div class="form-group">
       <label>محتوا</label>
       <textarea id="mytextarea" class="form-control @error('description') is-invalid @enderror"  name="description">{{$article->description}}</textarea>
       @error('description')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>

   <div class="form-group">
   <label>نام نویسنده : {{Auth::user()->name}}</label>
       <input type="hidden" name="user_id"  value="{{Auth::user()->id}}" >
   </div>

   <div class="form-group">
       <label>وضعیت</label>
       <select  class="form-control"  name="statuse">
           <option value="0">منتشر نشده</option>
           <option value="1" <?php if($article->statuse==1) echo 'selected';?>>منتشر شده</option>
       </select>
   </div>
   <div class="form-group">
       <label>انتخاب دسته بندی</label>
       <select type="text" class="form-control chosen-select" name="categories[]" multiple style="width:400px">
          @foreach ($categories as $cat_id => $cat_name)
          <option value="{{$cat_id}}"
          <?php if(in_array($cat_id,$article->categories->pluck('id')->toArray())) echo 'selected' ?>
          >{{$cat_name}}</option>  
          @endforeach
       </select>
   </div>
   {{-- <div class="form-group">
       <label>تلفن</label>
       <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" name="phone">
       @error('phone')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>
   <div class="form-group">
       <label>پسورد</label>
       <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
       @error('password')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>
   
   <div class="form-group">
       <label>تکرار پسورد</label>
       <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
       @error('password_confirmation')
           <div class="alert alert-danger">{{$message}}</div>
       @enderror
   </div>--}}
   <div class="form-group">
       <label>ثبت</label>
       <button type="submit"  class="btn btn-success"> به روزرسانی مطلب</button>
   </div> 
   </form></div>

    

   
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
</div> 
@endsection



