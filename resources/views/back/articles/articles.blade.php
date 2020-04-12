@extends('back.indexAdmin')



@section('content')

<div class="page-wrapper" style="background-color:white;" >
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">پنل مدیریت مطالب</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
         
      
    </div>
<a href="{{route('admin.articles.create')}}" class="btn waves-effect waves-light btn-block btn-primary col-md-1">ایجاد مطلب  جدید</a>
    
    @include('messages')

    <table class="table table-striped container" class="text-align:center;">
        <thead>
            <tr>
                <th>شماره</th>
                <th>عنوان مطلب</th>
                <th>نام مستعار</th>
                <th>نویسنده</th>
                <th>دسته بندی</th>
                <th>بازدید</th>
                <th>وضعیت انتشار</th>
                <th class="text-nowrap">ویرایش</th>
                <th class="text-nowrap">حدف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
           
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
--}}

            @switch($article->statuse)
            @case(1)
            @php 
            $url=route('admin.articles.statuse',$article->id);
            $statuse = '<a href="'.$url.'" class="btn tiny btn-xs btn-rounded btn-success" >فعال</a>' @endphp
            @break
            @case(0)
            @php
            $url=route('admin.articles.statuse',$article->id);
            $statuse = '<a href="'.$url.'" class="btn tiny btn-xs btn-rounded btn-danger" >غیر فعال</a>' @endphp
            @break
            @default
            @endswitch 
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->user->name}}</td>
                <td>
                    @foreach ($article->categories()->pluck('name')  as $category)
                       <span class="btn tiny btn-xs btn-rounded btn-danger">{{$category}}</span> 
                    @endforeach
                </td>
                {{-- @foreach ($userName as $user)
                <td>{{$user->name}}</td> 
                @endforeach --}}
                
                <td>{{$article->hit}}</td>
                <td>{!!$statuse!!}</td>
                {{-- <td> {{ $role }} </td> --}}
                <td class="text-nowrap">
                <a href="{{route('admin.articles.edit',$article->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                   
                </td>
                <td> <a href="{{route('admin.articles.destroy',$article->id)}}"
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


