@extends('layouts.adminLayout')

@section('content')
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice{
    color: #0b0b0b;
  }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Location</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('edit_locations') }}/{{ $location['id'] }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    @if ($errors->has('country'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                    @endif
                    <select class="form-control select2" name="country">
                      <option value="">Select Country</option>
                    <?php $country = \App\Http\Controllers\Model\BaseModelController::getCountry();
                      foreach($country as $cun){
                        ?>
                      <option value="<?= $cun['id'] ?>" <?php if($location['country_id'] == $cun['id']) { echo "selected"; } ?>><?= isset($cun['country_name']) ? $cun['country_name'] : '' ?></option>
                        <?php
                      }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location Name</label>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="name" class="form-control" id="name" value="<?= $location['name'] ?>" placeholder="Location Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location Id</label>
                    @if ($errors->has('id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('id') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="id" class="form-control" id="id" value="<?= $location['location_id'] ?>" placeholder="Location Id">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location Code</label>
                    @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="code" class="form-control" value="<?= $location['code'] ?>" id="code" placeholder="Location Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Vendor</label>
                    @if ($errors->has('vendor'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('vendor') }}</strong>
                    </span>
                    @endif
                    <?php
                    $vendor = \App\Http\Controllers\Model\BaseModelController::getVendors();
                    ?>
                    <select class="form-control select2" multiple="multiple" name="vendor[]">
                      <option value="">Select Vendor</option>
                    <?php 
                      foreach($vendor as $ven){
                        ?>
                      <option value="<?= $ven['id'] ?>" <?php if($ven['id'] == $vend[0]['vendor_id']){ echo "selected"; } ?>><?= isset($ven['company_name']) ? $ven['company_name'] :'' ?></option>
                        <?php
                      }
                    ?>
                    </select>
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