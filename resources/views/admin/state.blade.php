@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>State List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">state List</li>
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
                <h3 class="card-title">States</h3>

                <div class="card-tool s">
                  <div class="input-group input-group-sm float-right" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->

                    <!-- <div class="input-group-append"> -->
                      <a href="{{ asset('state/add') }}" class="btn btn-primary ">
                        Add State
                      </a>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>State Name</th>
                      <th>Home Page Status</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($states) > 0)
                        @foreach($states as $state)
                        <tr>
                        <td>{{ $state->id }}</td>
                        <td>{{ $state->name }}</td>
                        <td>
                            @if($state->home_page_status == 1)
                                Active
                            @else
                                De-Active
                            @endif
                        </td>
                        <td>
                            <a href="{{ asset('state/edit') }}/{{$state->id}}"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" >No Data Found</td>
                        </tr>
                    @endif
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
              {{ $states->links() }}
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