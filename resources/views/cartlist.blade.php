@extends('master')
@section('content')
<div class="custom-product" style="margin-top: 7%;">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Results for Products</h4>
            @foreach ($products as $item )
            <div class="row searched-item cart-list-divider">

               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
               </div>
               <div class="col-sm-3">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
               </div>
               <div class="col-sm-4">
                <button class="btn btn-warning ">Remove from cart</button>
               </div>

            </div>

            @endforeach

        </div>
    </div>





</div>


@endsection
