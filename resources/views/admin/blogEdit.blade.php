@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('Posts') }}">Posts</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
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
                <h3 class="card-title">Edit Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{asset('posts/edit')}}/{{$data['blogs']->id}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Edit Name</label>
                    <input type="text" name="name" value="{{ $data['blogs']->name }}" class="form-control" id="name">
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
                    <label for="name">Post Keyword</label>
                    <input type="text" name="keyword" value="{{ $data['blogs']->keyword }}" class="form-control" id="keyword">
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
                    <label for="name">Post Short Description</label>
                    <input type="text" name="sort_desc" value="{{ $data['blogs']->sort_description }}" class="form-control" id="sort_desc">
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
                    <?php $cat = explode(',', $data['blogs']->categories_ids); ?>
                    <div class="select2-purple">
                        <select class="form-control select2" multiple="multiple" data-dropdown-css-class="select2-purple" name="category[]">
                            <option value="0">Select Category</option>
                            @foreach($data['categories'] as $category)
                              <option value="{{ $category->id }}" <?php if(in_array($category->id, $cat)){ echo "selected"; } ?>>{{ $category->name }}</option>
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
                    <?php $sta = explode(',', $data['blogs']->state_ids); ?>
                    <div class="select2-purple">
                        <select class="form-control select2" multiple="multiple" data-dropdown-css-class="select2-purple" name="state[]">
                            <option value="0">Select State</option>
                            @foreach($data['states'] as $state)
                              <option value="{{ $state->id }}" <?php if(in_array($state->id, $sta)){ echo "selected"; } ?>>{{ $state->name }}</option>
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
                    <?php $dis = explode(',', $data['blogs']->district_ids); ?>
                    <div class="select2-purple">
                        <select class="form-control select2" multiple="multiple" data-dropdown-css-class="select2-purple" name="district[]">
                            <option value="0">Select District</option>
                            @foreach($data['district'] as $district)
                              <option value="{{ $district->id }}" <?php if(in_array($district->id, $dis)){ echo "selected"; } ?>>{{ $district->name }}</option>
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
                    <textarea id="summernote" name="description">
                    {{ $data['blogs']->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Video Link</label>
                    <input type="text" name="link" value="{{ $data['blogs']->link }}" class="form-control" id="sort_desc">
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
                          <input class="form-check-input" name="home_page_status" <?php if($data['blogs']->home_page_status == 1) { echo "checked"; } ?> type="checkbox">
                          <label class="form-check-label">Display on Home page</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Header Section Component(Home)</label>
                    <div class="form-check">
                          <input class="form-check-input" name="header_sec" <?php if($data['blogs']->header_sec == 1) { echo "checked"; } ?> type="checkbox">
                          <label class="form-check-label">Header Section Component(Home)</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Select Thumb Images</label>
                    <div class="select2-purple">
                        <select class="form-control" name="thumb_images" data-placeholder="Select Thumb Images" style="width: 100%;">
                            <option value="">Select Thumb Images</option> 
                            @foreach($data['file'] as $file)
                                <option value="{{ $file->id }}" <?php if($file->id == $data['blogs']->thumb_images){ echo "selected"; } ?>>{{ $file->file_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Select Images</label>
                    <div class="select2-purple">
                    <?php $img = explode(',', $data['blogs']->image_ids); ?>
                        <select class="select2" name="images[]" multiple="multiple" data-placeholder="Select Images" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @foreach($data['file'] as $file)
                                <option value="{{ $file->id }}" <?php if(in_array($file->id, $img)){ echo "selected"; } ?>>{{ $file->file_name }}</option>
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