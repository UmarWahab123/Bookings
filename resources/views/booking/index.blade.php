@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<style>#nine{font-weight: bold; margin-left: 23px;margin-top: 5px;}</style>

<h1 id=nine><strong>Bookings</strong></h1>
<div class="m-content">
  {{--<table class="table table-bordered">--}}
      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Traveling From</th>
        <th>Arrivel At</th>
        <th>Check In</th>
        <th>Travellers</th>
        <th>Adult</th>
        <th>Children</th>
        <th>Room</th>
        <th>Child1 Age</th>
        <th>Child2 Age</th>
        <th>Total Price</th>
        <th>Action</th>

    </thead>
    <tbody>
 @foreach($data['results'] as $key=>$value)
        <tr>
            <td>{{$key}}</td>
            <td>{{$value->traveling_from}}</td>
            <td>{{$value->arrivel_at}}</td>
            <td>{{$value->check_in}}</td>
            <td>{{$value->travellers}}</td>
            <td>{{$value->adult}}</td>
            <td>{{$value->children}}</td>
            <td>{{$value->room}}</td>
            <td>{{$value->child1_age}}</td>
            <td>{{$value->child2_age}}</td>
            <td>{{$value->total_price}}</td>

            <td>
             <?php echo delete_link(url('/deletebookings/' . $value->id)); ?>
              <a href="{{url('')}}/bookingsdetails/{{$value->id}}">View</a>

            </td>
        </tr>
 @endforeach
    </tbody>
</table>
</div>

@include('includes.delete_modal')

@endsection
