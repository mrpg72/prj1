@extends('back.indexAdmin')



@section('content')

<div class="page-wrapper" style="background-color:white;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">ایجاد دسته بندی جدید</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
         
      
    </div>

    <form action="{{route('admin.categories.store')}}"  class="container" dir="rtl" method="POST" style="text-align:right;padding-top:100px;padding-bottom:100px;">
        @csrf
    <div class="form-group">
        <label>نام دسته بندی جدید</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name">
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>نام مستعار</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}" name="slug">
        @error('slug')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
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
        <button type="submit"  class="btn btn-success">ذخیره دسته بندی</button>
    </div> 
    </form>
    

   
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
</div> 
@endsection



