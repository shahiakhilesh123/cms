@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('blogs') }}">Blogs</a></li>
              <li class="breadcrumb-item active">Add Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Blogs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('blogs/add')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Blog Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    @error('name')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('name') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Blog Short Description</label>
                    <input type="text" name="sort_desc" class="form-control" id="sort_desc">
                    @error('sort_desc')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('sort_desc') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Category</label>
                    <select class="form-control" name="category">
                        <option value="0">Select Category</option>
                        @foreach($data['categories'] as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('type')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('type') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description</label>
                    <textarea id="summernote" name="description">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Video Link</label>
                    <input type="text" name="link" class="form-control" id="sort_desc">
                    @error('link')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('link') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Display on Home page</label>
                    <div class="form-check">
                          <input class="form-check-input" name="home_page_status" type="checkbox">
                          <label class="form-check-label">Display on Home page</label>
                    </div>
                </div>
                  <div class="form-group">
                    <label>Select Images</label>
                    <div class="select2-purple">
                        <select class="select2" name="images[]" multiple="multiple" data-placeholder="Select Images" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @foreach($data['file'] as $file)
                                <option value="{{ $file->id }}">{{ $file->file_name }}</option>
                            @endforeach
                        </select>
                    </div>
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
        </div>
      </div>
    </section>
</div>
@endsection