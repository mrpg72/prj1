@if ($errors->any())
    <div class="alert alert-danger" id="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif




@if (session('success'))

<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif



@if (session('warning'))
<script>
  
      confirm("ذخیره سازی موفقیت آمویز بود ");
    
    </script>
<div class="alert alert-danger">
    {{session('warning')}}

</div>
    
@endif