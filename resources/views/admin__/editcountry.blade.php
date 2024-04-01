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
                <h3 class="card-title">Edit Counrty</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('edit_country') }}\{{ $country['id'] }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country Name</label>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="name" value="{{ $country['country_name'] }}" class="form-control" id="name" placeholder="Location Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country Code</label>
                    @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="code" class="form-control" value="{{ $country['country_code'] }}" id="code" placeholder="Location Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Code</label>
                    @if ($errors->has('phone_code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_code') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="phone_code" class="form-control" value="{{ $country['phone_code'] }}" id="code" placeholder="Location Code">
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
