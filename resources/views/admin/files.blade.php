@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>File List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">File List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Files</h3>

                <div class="card-tool s">
                  <div class="input-group input-group-sm float-right" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->

                    <!-- <div class="input-group-append"> -->
                      <a href="{{ asset('files') }}/add" class="btn btn-primary ">
                        Add File
                      </a>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              @include('layouts.messages')
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>File Name</th>
                      <th>File Size</th>
                      <th>File Type</th>
                      <th>Image</th>
                      <!-- <th></th> -->
                    </tr> 
                  </thead>
                  <tbody>
                    @foreach($files as $file)
                    <tr>
                      <td>{{ $file->id }}</td>
                      <td>{{ $file->file_name }}</td>
                      <td>{{ $file->file_size }}</td>
                      <td>{{ $file->file_type }}</td>
                      <td><img src="{{ asset('file').'/'.$file->file_name }}" style="width:22%;"/></td>
                      <!-- <td>
                        <a href="{{ asset('editmenu') }}/{{$file->id}}"><i class="fas fa-edit"></i></a>
                      </td> -->
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection