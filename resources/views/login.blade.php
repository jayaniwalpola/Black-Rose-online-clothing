@extends('master')
@section('content')
<div class="bg-img">
    <div class="w3-panel w3-card-4 login-card w3-animate-zoom ">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


</div>


@endsection
