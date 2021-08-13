@extends('master')
@section('content')
<div class="custom-product container" style="margin-top: 7%;">
    <table class="table">

        <tbody>
          <tr>
            <td>Amount</td>
            <td>Rs.{{$total}}</td>

          </tr>
          <tr>
            <td>Tax</td>
            <td>Rs.0</td>

          </tr>
          <tr>
            <td>Delivery</td>
            <td>Rs.10</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>Rs.{{$total+10}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/action_page.php">
          <div class="form-group">
            <textarea type="email" class="form-control" placeholder="Enter your address"></textarea>
          </div>
          <div class="form-group">
            <label for="pwd">Payment Method:</label><br><br>
            <input type="radio" name="payment" ><span>Online Payment</span><br><br>
            <input type="radio" name="payment"><span>Debit Card Payment</span><br><br>
            <input type="radio" name="payment"><span>Cash on Delivery</span><br><br>
         </div>

          <button type="submit" class="btn btn-default">Order Now</button>
        </form>
      </div>
</div>
@endsection
