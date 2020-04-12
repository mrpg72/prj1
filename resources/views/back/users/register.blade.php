@extends('back.indexAdmin')



@section('content')

<div class="page-wrapper" style="background-color:white;" >
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">پ\\\\نل مدیریت</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
         
      
    </div>
    <a href="" class="btn waves-effect waves-light btn-block btn-primary col-md-1">ایجاد کاربر جدید</a>
    
    @include('messages')

    <form action="{{route('admin.usercreate')}}"  class="container" dir="rtl" method="POST">
        @csrf
    <div class="form-group">
        <label>نام و نام خوانوادگی</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name">
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>ایمیل</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email">
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>تلفن</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" name="phone">
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
    </div>
    <div class="form-group">
        <label>ثبت</label>
        <button type="submit"  class="btn btn-success">ثبت نام</button>
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
{{-- <script>
    function myFunction() {
      setTimeout(function(){ 
      //  var alert = document.getElementsById("alert");
        document.getElementById('alert').style.color = 'red';
      }, 3000);
    }
    </script> --}}


