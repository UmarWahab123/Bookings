@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
{{ csrf_field() }}
<style>h2{font-weight: bold;}li{font-weight:bold;}</style>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h1 id="one"></h1>
      </div>
   </div>
</div>
<div class="container first">
   <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#reservation">Reservation Information</a></li>
      <li><a data-toggle="pill" href="#contact_information">Contact Information</a></li>
      <li><a data-toggle="pill" href="#guest">Guest</a></li>
      <li><a data-toggle="pill" href="#remarks">Booking Remarks</a></li>
      <li><a data-toggle="pill" href="#payment">Payments</a></li>
      <li><a data-toggle="pill" href="#additional_information">Additional Information</a></li>
   </ul>
   <br>
   <div class="tab-content">
      <div id="reservation" class="tab-pane fade active in show card p-5">
         <h2>Reservataion Information</h2>
         <br><br>
         <div class="row">
            <div class="col-lg-4">
               <h5>Traveling From</h5>
               {{$data['results']->traveling_from}}
            </div>
            <div class="col-lg-4">
               <h5>Arrivel At</h5>
               {{$data['results']->arrivel_at}}
            </div>
            <div class="col-lg-4">
               <h5>Check In</h5>
               {{$data['results']->check_in}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-lg-4">
               <h5>Travellers</h5>
               {{$data['results']->travellers}}
            </div>
            <div class="col-lg-4">
               <h5>Adult</h5>
               {{$data['results']->adult}}
            </div>
            <div class="col-lg-4">
               <h5>Children</h5>
               {{$data['results']->children}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-lg-4">
               <h5>Room</h5>
               {{$data['results']->room}}
            </div>
            <div class="col-lg-4">
               <h5>Child 1 Age</h5>
               {{$data['results']->child1_age}}
            </div>
            <div class="col-lg-4">
               <h5>Child 2 Age</h5>
               {{$data['results']->child2_age}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-lg-12">
               <h5>Total Price</h5>
               {{$data['results']->total_price}}
            </div>
         </div>
      </div>
      <div id="contact_information" class="tab-pane fade card p-5">
         <h2>Contact Information</h2>
         <br><br>
         <div class="row">
            <div class="col-lg-4">
               <h5>First Name</h5>
               {{$data['contact_info']->first_name}}
            </div>
            <div class="col-lg-4">
               <h5>Last Name</h5>
               {{$data['contact_info']->last_name}}
            </div>
            <div class="col-lg-4">
               <h5>Email</h5>
               {{$data['contact_info']->email}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-lg-4">
               <h5>Phone</h5>
               {{$data['contact_info']->phone}}
            </div>
            <div class="col-lg-4">
               <h5>Title</h5>
               {{$data['contact_info']->title}}
            </div>
            <div class="col-lg-4">
               <h5>Addres 1</h5>
               {{$data['contact_info']->address1}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-lg-4">
               <h5>Adress 2</h5>
               {{$data['contact_info']->address2}}
            </div>
            <div class="col-lg-4">
               <h5>City</h5>
               {{$data['contact_info']->city}}
            </div>
            <div class="col-lg-4">
               <h5>Postal Code</h5>
               {{$data['contact_info']->postal_code}}
            </div>
         </div>
      </div>
      <div id="guest" class="tab-pane fade card p-5">
         <h2>Guest</h2>
         <br>
         <table class="table table-striped- table-bordered table-hover table-checkable">
            <thead class="theme-color">
               <th>Title</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Passport Number </th>
            </thead>
            <tbody>
               @foreach($data['guest'] as $key=>$value)
               <tr>
                  <td>{{$value->title}}</td>
                  <td>{{$value->first_name}}</td>
                  <td>{{$value->last_name}}</td>
                  <td>{{$value->passport_number}}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <div id="remarks" class="tab-pane fade card p-5">
         <h2>Booking Remarks</h2>
         <br>
         <div class="row">
            <div class="col-lg-3">
               <h5>Flight Number</h5>
               {{$data['remarks']->flight_number}}
            </div>
            <div class="col-lg-3">
               <h5>Terminal Number</h5>
               {{$data['remarks']->terminal_number}}
            </div>
            <div class="col-lg-3">
               <h5>Arrival Date</h5>
               {{$data['remarks']->arrival_date}}
            </div>
            <div class="col-lg-3">
               <h5>Arrival Time</h5>
               {{$data['remarks']->arrival_time}}
            </div>
         </div>
      </div>
      <div id="payment" class="tab-pane fade card p-5">
         <h2>Payments</h2>
         <br>
         <div class="row">
            <div class="col-lg-3">
               <h5>Card Number</h5>
               {{$data['payment']->card_number}}
            </div>
            <div class="col-lg-3">
               <h5>Expiry Date</h5>
               {{$data['payment']->expiry_date}}
            </div>
            <div class="col-lg-3">
               <h5>First Name</h5>
               {{$data['payment']->first_name}}
            </div>
            <div class="col-lg-3">
               <h5>Last Name</h5>
               {{$data['payment']->last_name}}
            </div>
         </div>
      </div>
      <div id="additional_information" class="tab-pane fade card p-5">
         <h2>Additional Info</h2>
         <br>
         <div class="row">
            <div class="col-lg-12">
               <h5>Details</h5>
               {{$data['additional_info']->details}}
            </div>
         </div>
         <br><br>
         <div class="row">
            <div class="col-lg-12">
               <h5>Additional Requirement</h5>
               {{$data['additional_info']->additional_req}}
            </div>
         </div>
         <br><br>
         <div class="row">
            <div class="col-lg-12">
               <h5>Dietary Requirement</h5>
               {{$data['additional_info']->dietary_req}}
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
