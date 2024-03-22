@extends('layouts.adminLayout')

@section('content')
<style>
  a .fontsize {
    font-size: 30px;
  }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="card-title">Coupon</h3>
                    </div>
                    <div class="col-md-5" align='right'>
                    <a href="{{ url('coupon_add') }}"><button class="btn btn-primary">Add Coupan</button></a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Coupon Code</th>
                      <th>Amount</th>
                      <th style="width: 40px">Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($coupons as $coupon)
                      <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->code }}</td>
                        <td>{{ $coupon->amount }}</td>
                        <td>
                          @if($coupon->status == 1)
                            Active
                          @else
                            Deactive
                          @endif
                        </td>
                        <td>
                            @if($coupon['status'] == 1)
                            <a href="{{ url('coupon') }}/{{ $coupon['id'] }}/0">
                              <i class="fa fa-toggle-on fontsize" aria-hidden="true"></i>
                            </a>
                            @else
                            <a href="{{ url('coupon') }}/{{ $coupon['id'] }}/1">
                              <i class="fa fa-toggle-off fontsize" aria-hidden="true"></i>
                            </a>
                            @endif   
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{ url('delete/coupon') }}/{{ $coupon['id'] }}"><i class="fas fa-trash fontsize"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $coupons->links('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection