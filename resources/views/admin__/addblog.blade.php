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
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('add_blog') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Blog Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description</label>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                    <div class="card-body">
                        <textarea id="summernote" name="description">
                            Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="image">Upload Image</label>
                    @if ($errors->has('menu_link'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter Menu Link">
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
