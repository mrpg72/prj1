@extends('back.indexAdmin')



@section('content')

<div class="page-wrapper" style="background-color:white;" >
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">پنل مدیریت دسته بندی ها</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
         
      
    </div>
<a href="{{route('admin.categories.create')}}" class="btn waves-effect waves-light btn-block btn-primary col-md-1">ایجاد دسته بندی جدید</a>
    
    @include('messages')

    <table class="table table-striped container" class="text-align:center;">
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام دسته بندی</th>
                <th>نام مستعار</th>
            
                <th>ایجاد شده توسط</th>
                <th class="text-nowrap">ویرایش</th>
                <th class="text-nowrap">حدف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
           
{{-- 
            @switch($user->role)
            @case(1)
            @php $role = 'مدیر' @endphp
            @break
            @case(2)
            @php $role = 'کاربر' @endphp
            @break
            @default
            @endswitch 


            @switch($user->status)
            @case(1)
            @php 
            $url=route('admin.userstatuse',$user->id);
            $status = '<a href="'.$url.'" class="btn tiny btn-xs btn-rounded btn-success" >فعال</a>' @endphp
            @break
            @case(0)
            @php
            $url=route('admin.userstatuse',$user->id);
            $status = '<a href="'.$url.'" class="btn tiny btn-xs btn-rounded btn-danger" >غیر فعال</a>' @endphp
            @break
            @default
            @endswitch --}}
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                @foreach ($userName as $user)
                <td>{{$user->name}}</td> 
                @endforeach
                
                {{-- <td>{{$user->phone}}</td> --}}
                {{-- <td>{!!$status!!}</td>
                <td> {{ $role }} </td> --}}
                <td class="text-nowrap">
                <a href="{{route('admin.categories.edit',$category->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                   
                </td>
                <td> <a href="{{route('admin.categories.destroy',$category->id)}}"
                    onclick="return confirm('حذف بشه یا نه ؟')" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

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


