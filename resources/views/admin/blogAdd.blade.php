@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('Posts') }}">Posts</a></li>
              <li class="breadcrumb-item active">Add Post</li>
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
                <h3 class="card-title">Add Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{asset('posts/add')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Post Title</label>
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
                    <label for="name">Title URL</label>
                    <input type="text" name="eng_name" class="form-control" id="eng_name">
                    @error('eng_name')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('eng_name') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Keyword</label>
                    <input type="text" name="keyword" class="form-control" id="keyword">
                    @error('keyword')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('keyword') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Brief</label>
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
                    <div class="select2-purple">
                        <select class="form-control" name="category">
                            <option value="0">Select Category</option>
                            @foreach($data['categories'] as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
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
                    <label for="exampleInputPassword1">Select State</label>
                    <div class="select2-purple">
                        <select class="form-control" name="state">
                            <option value="0">Select State</option>
                            @foreach($data['states'] as $state)
                              <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                      @error('state')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('state') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select District</label>
                    <div class="select2-purple">
                        <select class="form-control"  name="district">
                            <option value="0">Select District</option>
                            @foreach($data['district'] as $district)
                              <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                      @error('district')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('district') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post Description</label>
                    <textarea id="summernote" style="height: 360px;" name="description">
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
                    <label for="exampleInputPassword1">Header Section Component(Home)</label>
                    <div class="form-check">
                          <input class="form-check-input" name="header_sec" type="checkbox">
                          <label class="form-check-label">Header Section Component(Home)</label>
                    </div>
                </div>
                  <div class="form-group">
                    <label>Select Thumb Images</label>
                    <div class="select2-purple">
                        <select class="form-control" name="thumb_images" data-placeholder="Select Thumb Images" data-dropdown-css-class="select2-purple" style="width: 100%;">
                          <option value="">Select Thumb Images</option>  
                          @foreach($data['file'] as $file)
                                <option value="{{ $file->id }}">{{ $file->file_name }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select Images</label>
                    <div class="select2-purple">
                        <select class="form-control" name="images" data-placeholder="Select Images" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @foreach($data['file'] as $file)
                                <option value="{{ $file->id }}" style="background-image:url({{ asset('file').'/'.$file->file_name }});">{{$file->file_name}}</option>
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