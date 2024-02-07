@extends('admin.layouts.app')


@section('content')


<main id="main" class="main">
<section class="section dashboard" style="margin-left: -260px;
">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
    <div class="float-sm-right">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <a href="{{url('admin/admin/add')}}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Add Admin
        </a>
    </div>
</div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Tables</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getRecord as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->status == 0 ? 'Active' : 'Inactive'}}</td>
                                        <td>{{$value->role == 0 ? 'Admin' : 'Super Admin'}}</td>
                                        <td>
                                            <a href="{{url('admin/admin/edit/'.$value->id)}}" class="btn btn-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{url('admin/admin/delete/'.$value->id)}}" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('admin.layouts.message')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="text-center mt-1 mb-2">


          </div>





              <style>
                  /* The switch - the box around the slider */
                  .switch {
                      position: relative;
                      display: inline-block;
                      width: 60px;
                      height: 34px;
                  }

                  /* Hide default HTML checkbox */
                  .switch input {
                      opacity: 0;
                      width: 0;
                      height: 0;
                  }

                  /* The slider - the moving part */
                  .slider {
                      position: absolute;
                      cursor: pointer;
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;
                      background-color: #ccc;
                      -webkit-transition: .4s;
                      transition: .4s;
                  }

                  .slider:before {
                      position: absolute;
                      content: "";
                      height: 26px;
                      width: 26px;
                      left: 4px;
                      bottom: 4px;
                      background-color: white;
                      -webkit-transition: .4s;
                      transition: .4s;
                  }

                  input:checked + .slider {
                      background-color: #2196F3;
                  }

                  input:focus + .slider {
                      box-shadow: 0 0 1px #2196F3;
                  }

                  input:checked + .slider:before {
                      -webkit-transform: translateX(26px);
                      -ms-transform: translateX(26px);
                      transform: translateX(26px);
                  }

                  /* Rounded sliders */
                  .slider.round {
                      border-radius: 34px;
                  }

                  .slider.round:before {
                      border-radius: 50%;
                  }
              </style>

{{-- <label class="switch">
    <input type="checkbox">
    <span class="slider rectangle"></span>
</label> --}}

{{-- its toggle button html script --}}















        {{-- End - Content comes here --}}
       </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  </section>
</main>
  @endsection

@section('style')




@endsection





