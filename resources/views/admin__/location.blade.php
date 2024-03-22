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
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="card-title">Locations</h3>
                    </div>
                    <div class="col-md-5" align='right'>
                    <a href="{{ url('add_location') }}"><button class="btn btn-primary">Add Locations</button></a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Location Name</th>
                      <th>Location Code</th>
                      <th>Location Id</th>
                      <th style="width: 40px">Status</th>
                      <th style="">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach ($location as $loc)
                        <tr>
                        <td>{{ $loc['id'] }}.</td>
                        <td>{{ $loc['name'] }}</td>
                        <td>
                            {{ $loc['code'] }}
                        </td>
                        <td>
                            {{ $loc['location_id'] }}
                        </td>
                        <td>
                            @if($loc['status'] == 1)
                                Active
                            @else
                                Deactive
                            @endif   
                        </td>
                        <td>
                            @if($loc['status'] == 1)
                            <a href="{{ url('locations') }}/{{ $loc['id'] }}/0"><i class="fa fa-toggle-on fontsize" aria-hidden="true"></i></a>
                            @else
                            <a href="{{ url('locations') }}/{{ $loc['id'] }}/1"><i class="fa fa-toggle-off fontsize" aria-hidden="true"></i></a>
                            @endif   
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{ url('locations') }}/{{ $loc['id'] }}"><i class="fas fa-edit fontsize"></i></a>
                        </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $location->links('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection