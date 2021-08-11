@extends('master')
@section('content')
<div class="bg-img">
    <div class="w3-container">
        <div class="img">
            <img src="https://c4.wallpaperflare.com/wallpaper/162/878/392/models-model-black-dress-black-hair-black-rose-hd-wallpaper-preview.jpg" class="w3-image"  >
        </div>
        <div class="w3-panel w3-card-4 login-card w3-animate-zoom ">

            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="w3-button w3-black">Login</button>
            </form>

        </div>
    </div>



</div>


@endsection
