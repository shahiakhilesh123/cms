@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Save Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Save Setting</li>
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
                <h3 class="card-title">Save Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{asset('setting')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Site Name</label>
                    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="form-control" id="site_name">
                    @error('site_name')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('site_name') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Meta Tag</label>
                    <input type="text" name="meta_tag" value="{{ $setting->meta_tag }}" class="form-control" id="meta_tag">
                    @error('meta_tag')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('meta_tag') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Meta Description</label>
                    <input type="text" name="meta_description" value="{{ $setting->meta_description }}" class="form-control" id="meta_description">
                    @error('meta_description')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('meta_description') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Meta Keyword</label>
                    <input type="text" name="keyword" value="{{ $setting->keyword }}" class="form-control" id="keyword">
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
                    <label for="name">YouTude Link</label>
                    <input type="text" name="youtube" value="{{ $setting->youtube }}" class="form-control" id="youtube">
                    @error('youtube')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('youtube') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Facebook Link</label>
                    <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control" id="facebook">
                    @error('facebook')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('facebook') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Instagram Link</label>
                    <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control" id="instagram">
                    @error('instagram')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('instagram') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Slider Header</label>
                    <input type="text" name="slider_header" value="{{ $setting->slider_header }}" class="form-control" id="slider_header">
                    @error('slider_header')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('slider_header') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Slider Text</label>
                    <input type="text" name="slider_text" value="{{ $setting->slider_text }}" class="form-control" id="slider_text">
                    @error('slider_text')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('slider_text') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Slider Image</label>
                    <div class="custom-file">
                    <select class="form-control select" name="file" style="width: 100%;">
                      <option value="0">Select Slider Image</option>
                      <?php $files = App\Models\File::get()->all(); ?>
                      @foreach($files as $file)
                          <option value="{{ $file->id }}" <?php if($setting->file == $file->id) { echo "selected"; } ?>>{{ $file->file_name }}</option>
                      @endforeach
                    </select>
                    </div>
                    @error('file')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('file') }}
                            <!-- </span> -->
                          </div>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Slider Carousal Category</label>
                    <select class="form-control" name="category">
                        <option value="0">Select Slider Carousal Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->category) { echo "selected"; } ?> >{{ $category->name }}</option>
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
                    <label for="name">Second Row First Column Title</label>
                    <input type="text" name="secound_first_title" value="{{ $setting->secound_row_first_title }}" class="form-control" id="secound_first_title">
                    @error('secound_first_title')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('secound_first_title') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Second Row First Column Image</label>
                    <div class="custom-file">
                    <select class="form-control select" name="secound_row_first_file" style="width: 100%;">
                      <option value="0">Second Row First Column Image</option>
                      <?php $files = App\Models\File::get()->all(); ?>
                      @foreach($files as $file)
                          <option value="{{ $file->id }}" <?php if($file->id == $setting->secound_row_first_file) { echo "selected"; } ?>>{{ $file->file_name }}</option>
                      @endforeach
                    </select>
                    </div>
                    @error('secound_row_first_file')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('secound_row_first_file') }}
                            <!-- </span> -->
                          </div>
                        </div>
                    @enderror
                  </div> <div class="form-group">
                    <label for="name">Second Row First Link</label>
                    <input type="text" name="secound_row_first_link" value="{{ $setting->secound_row_first_link }}"  class="form-control" id="facebook">
                    @error('secound_row_first_link')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('secound_row_first_link') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Second Row Second column Category</label>
                    <select class="form-control" name="secound_row_secound_col_category">
                        <option value="0">Select Second Row Second column Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->secound_row_secound_col_category) { echo "selected"; } ?> >{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('secound_row_secound_col_category')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('secound_row_secound_col_category') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Second Row Third Column Image</label>
                    <div class="custom-file">
                    <select class="form-control select" name="secound_row_third_file" style="width: 100%;">
                      <option value="0">Second Row First Column Image</option>
                      <?php $files = App\Models\File::get()->all(); ?>
                      @foreach($files as $file)
                          <option value="{{ $file->id }}" <?php if($file->id == $setting->secound_row_third_file) { echo "selected"; } ?>>{{ $file->file_name }}</option>
                      @endforeach
                    </select>
                    </div>
                    @error('secound_row_third_file')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('secound_row_third_file') }}
                            <!-- </span> -->
                          </div>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Third Row Category</label>
                    <select class="form-control" name="third_row_category">
                        <option value="0">Select Third Row Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->third_row_category){ echo "selected"; } ?>>{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('third_row_category')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('third_row_category') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fourth Row Third Column Image</label>
                    <div class="custom-file">
                        {{ $setting->fourth_row_first_image }}
                    <select class="form-control select" name="fourth_row_first_image" style="width: 100%;">
                      <option value="0">Fourth Row First Column Image</option>
                      <?php $files = App\Models\File::get()->all(); ?>
                      @foreach($files as $file)
                          <option value="{{ $file->id }}" <?php if($file->id == $setting->fourth_row_first_image) { echo "selected"; } ?>>{{ $file->file_name }}</option>
                      @endforeach
                    </select>
                    </div>
                    @error('fourth_row_first_image')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('fourth_row_first_image') }}
                            <!-- </span> -->
                          </div>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Fourth Row First Column Link</label>
                    <input type="text" name="fourth_row_first_link" value="{{ $setting->fourth_row_first_link }}" class="form-control" id="facebook">
                    @error('fourth_row_first_link')
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"> -->
                          {{ $errors->first('fourth_row_first_link') }}
                          <!-- </span> -->
                        </div>
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Fourth Row Category</label>
                    <select class="form-control" name="fourth_row_category">
                        <option value="0">Select Fourth Row Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->fourth_row_secound_cat) { echo "selected"; } ?> >{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('fourth_row_category')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('fourth_row_category') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Fifth Row First Col Category</label>
                    <select class="form-control" name="fifth_row_first_col_category">
                        <option value="0">Select Fifth Row First Col Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->fifth_row_first_cat) { echo "selected"; } ?> >{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('fifth_row_first_col_category')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('fifth_row_first_col_category') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Fifth Row First Second Category</label>
                    <select class="form-control" name="fifth_row_second_col_category">
                        <option value="0">Select Fifth Row Second Col Category</option>
                        <?php $categories = App\Models\Category::get()->all(); ?>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if($category->id == $setting->fifth_row_second_cat) { echo "selected"; } ?> >{{ $category->name }}</option>
                        @endforeach
                    </select>
                      @error('fifth_row_second_col_category')
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <!-- <span class="fas fa-envelope"> -->
                            {{ $errors->first('fifth_row_second_col_category') }}
                            <!-- </span> -->
                          </div>
                        </div>
                      @enderror
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