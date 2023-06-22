@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/online-medicine-concept_160901-152.png" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Welcome to our Doctor Appointment WebApp Dashboard!</h2>
            <p> Effortlessly schedule, reschedule, or cancel appointments using our user-friendly interface. Real-time updates and notifications ensure you stay informed and never miss an important appointment.

Need assistance? Our dedicated support team is ready to help.

Thank you for choosing our Doctor Appointment WebApp. Your health is our priority.

Best regards. </p>
            <div class="mt-5">
               <!-- <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a> -->
            </div>
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection