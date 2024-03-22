@extends('layouts.adminLayout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Bordered Table</h3> -->
                <a href="{{ url('add_blog') }}"><button class="btn btn-primary">Add Blog</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach ($blogs as $blog)
                        <tr>
                        <td>{{ $i }}.</td>
                        <td>{{ $blog['title'] }}</td>
                        <td>
                            @if($menu['status'] == 1)
                                Active
                            @else
                                Deactive
                            @endif   
                        </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        <div>
    </div>
</section>
@endsection