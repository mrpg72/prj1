@extends('front.index')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<section class="bg-home" id="home">
    <div class="home-bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                
                <div class="home-img">
                  
                </div>
            </div>
        </div>
    </div>
</section>




<form action="{{route('register')}}"  class="container" dir="rtl" method="POST">
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







@endsection
