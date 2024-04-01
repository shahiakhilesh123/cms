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
                    <div class="col-md-6">
                        <h3 class="card-title">Country</h3>
                    </div>
                    <div class="col-md-6" align="right">
                        <a href="{{ url('add_country') }}"><button class="btn btn-primary">Add Country</button></a>
                    </div>
                </div>  
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Phone Code</th>
                      <th style="width: 40px">Status</th>
                      <th style="">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach ($country as $coun)
                        <tr>
                        <td>{{ $coun['id'] }}.</td>
                        <td>{{ $coun['country_name'] }}</td>
                        <td>
                            {{ $coun['country_code'] }}
                        </td>
                        <td>
                            {{ $coun['phone_code'] }}
                        </td>
                        <td>
                            @if($coun['status'] == 1)
                                Active
                            @else
                                Deactive
                            @endif   
                        </td>
                        <td>
                            @if($coun['status'] == 1)
                            <a href="{{ url('country') }}/{{ $coun['id'] }}/0"><i class="fa fa-toggle-on fontsize" aria-hidden="true"></i></a>
                            @else
                            <a href="{{ url('country') }}/{{ $coun['id'] }}/1"><i class="fa fa-toggle-off fontsize" aria-hidden="true"></i></a>
                            @endif   
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{ url('edit_country') }}/{{ $coun['id'] }}"><i class="fas fa-edit fontsize"></i></a>
                        </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $country->links('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection