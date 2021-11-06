@extends('layouts.app')

@section('content')
<div class="container text-center">
     <div class="col-md-12">
       <div class="text-center">
         <h2>Checkout Order Form</h2>
       </div>
       <div class="card">
         <div class="card-body">
           <div class="">
             <form class="" action="{{ route('orders.store') }}" method="post">
               @csrf
               <div class="row">
                 <div class="form-group col-md-4">
                   <label for="">Mystery BoxName</label>
                   <input type="text" name="order_name" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-4">
                   <label for="">ShippingFullname</label>
                   <input type="text" name="shipping_fullname" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-4">
                   <label for="">Shipping Full Address</label>
                   <input type="text" name="shipping_address" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">ShippingCity</label>
                   <input type="text" name="shipping_city" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">ShippingState</label>
                   <input type="text" name="shipping_state" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">ShippingZipcode</label>
                   <input type="text" name="shipping_zipcode" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">ShippingPhone</label>
                   <input type="text" name="shipping_phone" value="" class="form-control">
                 </div>
               </div>
               <p style="border:1px solid black;background-color:black;color:white">(Optional)</p>

               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Billing-Fullname</label>
                   <input type="text" name="billing_fullname" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingFullAddress</label>
                   <input type="text" name="billing_address" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">BillingCity</label>
                   <input type="text" name="billing_city" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingState</label>
                   <input type="text" name="billing_state" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">BillingZipcode</label>
                   <input type="text" name="billing_zipcode" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingPhone</label>
                   <input type="text" name="billing_phone" value="" class="form-control">
                 </div>
               </div>
               <hr>
               <h4>Payment Option</h4>
               <div class="row py-4">
                 <div class="input-form">
                   <label for="form-check-label">Stripe Payment</label>
                   <input type="radio" name="payment_method" value="stripe" class="form-input">
                 </div>

               </div>
               <hr>
                <div class="row py-6">
                  <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-primary" style="width:400px;margin-left:350px">Place Order</button>
                  </div>
                </div>

             </form>

           </div>
         </div>
       </div>
       <!-- Trigger the modal with a button -->

     </div>
     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     <script type="text/javascript" src="asset('js/stripe-checkout.js')">

     </script>
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
@endsection
