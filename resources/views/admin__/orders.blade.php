@extends('layouts.adminLayout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking Orders</h3>
                <!-- <a href="{{ url('add_menu') }}"><button class="btn btn-primary">Add Menu</button></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Booking No</th>
                      <th>Pickup City</th>
                      <th>DropOff City</th>
                      <th>Pickup Date/Time</th>
                      <th>DropOff Date/Time</th>
                      <th>Vendor Name</th>
                      <th>Payment Type</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($bookings['data'] as $booking)
                    <tr>
                        <td>{{ $booking['booking_id'] }}</td>
                        <td>{{ $booking['pickup_city'] }}</td>
                        <td>{{ $booking['dropoff_city'] }}</td>
                        <td>{{ $booking['pickup_time'] }}</td>
                        <td>{{ $booking['dropoff_time'] }}</td>
                        <td>{{ $booking['vendor_name'] }}</td>
                        <td>{{ $booking['payment_type'] }}</td>
                        <td>{{ $booking['payment_status'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                  @foreach($bookings['links'] as $link)
                  <li class="page-item"><a class="page-link" href="{{ $link['url'] }}">{{ html_entity_decode($link['label']) }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection