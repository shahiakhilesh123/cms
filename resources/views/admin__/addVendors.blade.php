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
                <h3 class="card-title">Add Vendors</h3>
              </div>
              <?php //print_r($vendors); ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('vendors') }}/{{ $vendors->id }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    @if ($errors->has('f_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('f_name') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" value="{{ isset($vendors['first_name']) ? $vendors['first_name'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    @if ($errors->has('l_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('f_namef_name') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name" value="{{ isset($vendors['last_name']) ? $vendors['last_name'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    @if ($errors->has('phone_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_no') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Phone No." value="{{ isset($vendors['phone_no']) ? $vendors['phone_no'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ isset($vendors['email']) ? $vendors['email'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Commission</label>
                    @if ($errors->has('commission'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('commission') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="commission" class="form-control" id="commission" placeholder="Commission" value="{{ isset($vendors['commission']) ? $vendors['commission'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pan No.</label>
                    @if ($errors->has('pan_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pan_no') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="pan_no" class="form-control" id="pan_no" placeholder="Pan No." value="{{ isset($vendors['pan_no']) ? $vendors['pan_no'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pan Image</label>
                    @if ($errors->has('pan_image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pan_image') }}</strong>
                    </span>
                    @endif
                    <input type="file" name="pan_no_file" class="form-control" id="pan_no_file" placeholder="Pan No."> {{ isset($vendors['pan_image']) ? $vendors['pan_image'] : '' }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tan No.</label>
                    @if ($errors->has('tan_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tan_no') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="tan_no" class="form-control" id="tan_no" placeholder="Tan No." value="{{ isset($vendors['tan_no']) ? $vendors['tan_no'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GST No.</label>
                    @if ($errors->has('gst_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gst_no') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="gst_no" class="form-control" id="gst_no" placeholder="Gst No." value="{{ isset($vendors['gst_no']) ? $vendors['gst_no'] : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">API Code</label>
                    @if ($errors->has('api_code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('api_code') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="api_code" class="form-control" id="api_code" placeholder="Api Code" value="{{ isset($vendors['api_url_code']) ? $vendors['api_url_code'] : '' }}">
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
