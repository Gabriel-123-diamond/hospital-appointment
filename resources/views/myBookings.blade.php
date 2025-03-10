@extends('layouts.main')

@section('content')



<div class="container-lg" style="margin: 0 auto;">


    <h2 class="text-center mt-2 mb-2" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:blueviolet;">C&D Bookings</h2>

    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">Booking id</th>
                <th scope="col">Appointment id</th>
                <th scope="col">Appointment name</th>
                <th scope="col">Appointment Date</th>
                <th> Want to Cancel?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{$booking->id}}</th>
                <td>{{$booking->appointment_id}}</td>
                <td>{{$booking->department_name}}</td>
                <td>{{$booking->appointment_date}}</td>
                <!-- <td>Please call 89778789o78</td> -->

                <td>
                    <form method="get" action="{{ route('cancelBooking') }}">
                        @csrf
                        <input type="text" style="display:none;" value="{{$booking->id}}" name="booking_id" />
                        <input type="text" style="display:none;" value="{{$booking->appointment_id}}" name="appointment_id" />
                        <input type="submit" value="cancel" class="btn btn-danger" />
                    </form>
                </td>


            </tr>

            @endforeach

        </tbody>
    </table>



</div>

@endsection