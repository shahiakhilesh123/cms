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
                <h3 class="card-title">Add Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('add_menu') }}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Menu Name</label>
                    @if ($errors->has('menu_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('menu_name') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="menu_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Super Menu</label>
                    @if ($errors->has('menu_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('menu_id') }}</strong>
                    </span>
                    @endif
                    <select name="menu_id" class="form-control">
                        <option value="0">Select Super Menu</option>
                        @foreach($menus as $menu)
                            <option value="{{ $menu['id'] }}">{{ $menu['menu_name'] }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Menu Link</label>
                    @if ($errors->has('menu_link'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('menu_link') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="menu_link" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Menu class</label>
                    @if ($errors->has('menu_class'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('menu_class') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="menu_class" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Class">
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