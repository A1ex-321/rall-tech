@extends('admin.layouts.app')


@section('content')


<main id="main" class="main">
<section class="section dashboard" style="margin-left: -260px;
">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add user and Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- /.row start -->
       <div class="row">
        {{-- Start -  Content comes here --}}




        <div class="col-md-12">
    <!-- jQuery validation -->
    <div class="card ">
        <div class="card-header" style="background-color:#6e9ee6; border: 1px solid #ccc;"style="">
            <h3 class="card-title">Add New Admin <small>Page</small></h3>
        </div>
        <!-- /.card-header -->
        <!-- Form start -->
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="card-body">
              
                <div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" required>
        <div style="color:red">{{ $errors->first('email') }}</div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="0" {{ (old('status') == 0 ? 'selected' : '') }}>Active</option>
            <option value="1" {{ (old('status') == 1 ? 'selected' : '') }}>Inactive</option>
        </select>
    </div>
</div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" required>
                        <option value="0" {{ (old('role') == 0 ? 'selected' : '') }}>Admin</option>
                        <option value="1" {{ (old('role') == 1 ? 'selected' : '') }}>Super Admin</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>












        {{-- End - Content comes here --}}
       </div>
        <!-- /.row end -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</section>
</main>
  @endsection







