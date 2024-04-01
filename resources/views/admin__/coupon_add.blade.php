@extends('layouts.adminLayout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Coupon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('add_coupon') }}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Coupon Code</label>
                    @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="code" class="form-control" id="exampleInputEmail1" placeholder="Enter Coupon Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Discount Amount</label>
                    @if ($errors->has('amount'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('amount') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter amount in rs

">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Description">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        <div>
    </div>
</section>
@endsection