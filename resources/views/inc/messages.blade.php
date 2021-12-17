@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="msg-error ">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="msg-success ">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="msg-error ">
        {{session('error')}}
    </div>
@endif

