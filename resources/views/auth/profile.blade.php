@extends('front.index')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<section class="bg-home" id="home">
    <div class="home-bg-overlay"></div>
    <div class="container">
        <h1 style="text-align:center;color:white;padding:50px;">{{$pagetitle}}</h1>
        <div class="row">
            <div class="col-lg-12 text-center">
                
                <div class="home-img">
                
                </div>
            </div>
        </div>
    </div>
</section>

@include('messages')


<form action="{{route('profileupdate',$user->id)}}"  class="container" dir="rtl" method="POST" style="text-align:right;padding-top:100px;padding-bottom:100px;">
    @csrf
<div class="form-group">
    <label>نام و نام خوانوادگی</label>
<input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label>ایمیل</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email">
    @error('email')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
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
</div>
<div class="form-group">
    <label>ثبت</label>
    <button type="submit"  class="btn btn-success"> ویرایش پروفایل</button>
</div>
</form>







@endsection
