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
            <!-- <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div> -->
        </div>
    </div>
    <hr>
<!--Search doctor-->
<form action="{{url('/')}}" method="GET">
    <div class="card">
        <div class="card-body">
            <div class="card-header">Find Doctors</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Find Doctors</button>

                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</form>

    <!--display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="card-header"> Doctors </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse($doctors as $doctor)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="{{asset('images')}}/{{$doctor->doctor->image}}" width="100px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{$doctor->doctor->name}}
                            </td>
                            <td>
                                {{$doctor->doctor->department}}
                            </td>
                            <td>
                                <a href="{{route('create.appointment',[$doctor->user_id,$doctor->date])}}"><button class="btn btn-success">Book Appointment</button></a>
                            </td>
                        </tr>
                        @empty
                        <td>No doctors available today</td>
                        @endforelse


                    </tbody>
                </table>
                
            </div>
        </div>
        
    </div>
</div>
@endsection