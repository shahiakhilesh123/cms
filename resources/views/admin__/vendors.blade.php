@extends('layouts.adminLayout')

@section('content')
<style>
  a .fontsize {
    font-size: 30px;
  }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Locations</h3>
                <!-- <a href="{{ url('add_vendors') }}"><button class="btn btn-primary">Add Menu</button></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Company Name</th>
                      <th>Commission</th>
                      <th style="width: 40px">Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach ($vendors as $ven)
                        <tr>
                        <td>{{ $ven['id'] }}.</td>
                        <td>{{ $ven['first_name'] }} {{ $ven['last_name'] }}</td>
                        <td>
                            {{ $ven['phone_no'] }}
                        </td>
                        <td>
                            {{ $ven['email'] }}
                        </td>
                        <td>
                            {{ $ven['company_name'] }}
                        </td>
                        <td>
                            {{ $ven['commission'] }}
                        </td>
                        <td>
                            @if($ven['status'] == 1)
                                Active
                            @else
                                Deactive
                            @endif   
                        </td>
                        <td>
                            @if($ven['status'] == 1)
                            <a href="{{ url('vendors') }}/{{ $ven['id'] }}/0">
                              <i class="fa fa-toggle-on fontsize" aria-hidden="true"></i>
                            </a>
                            @else
                            <a href="{{ url('vendors') }}/{{ $ven['id'] }}/1">
                              <i class="fa fa-toggle-off fontsize" aria-hidden="true"></i>
                            </a>
                            @endif   
                        
                          <a href="{{ url('vendors') }}/{{ $ven['id'] }}">
                            <i class="fas fa-edit fontsize" aria-hidden="true"></i>
                          </a>
                        </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              {{ $vendors->links('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection