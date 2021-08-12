<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total =ProductController::cartItem();
}

?>
<div class="w3-top">
    <div class="w3-bar w3-black w3-cursive  "  >

        <a href="#" class="w3-bar-item w3-mobile w3-padding-24" style="width:7%;">BlAcKrOsE</a>
        <a href="/" class="w3-bar-item w3-button w3-mobile w3-padding-24" style="width:7%;">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-padding-24" style="width:7%;">About</a>

        <a href="#" class="w3-bar-item w3-button w3-mobile w3-padding-24" style="width:7%;">Orders</a>




        <div class="w3-dropdown-hover w3-right ">
            @if(Session::has('user'))

            <button class="w3-button w3-black w3-padding-24" style="width:100%;" >{{Session::get('user')['name']}}</button>
            <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
            <a href="/logout" class="w3-bar-item w3-button" style="background-color:black;">Logout</a>

            </div>

        </div>
        <div class=" w3-right width-cart">
            <a href="#" class="w3-bar-item w3-button w3-mobile w3-padding-24">Cart({{$total}})</a>
        </div>
        @else
        <div class=" w3-right width-cart">
            <a href="/login" class="w3-bar-item w3-button w3-mobile w3-padding-24">Login</a>
        </div>

        @endif
    </div>



</div>
