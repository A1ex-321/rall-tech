@extends('admin.layouts.app')


@section('content')

<!-- SweetAlert2 CSS -->

<main id="main" class="main">
<section class="section dashboard" style="margin-left: -260px;
"><div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h1 class="m-0">Work</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Work</li>
   
    <a style="color:black;padding:3px;"href="{{ route('create-blog') }}" class="btn btn-block btn-primary">
        <i class="fas fa-plus-circle"></i> Add Work
    </a>
    </ol>
</div>
<!-- /.col -->
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
                        <h5 class="card-title">Blog Posts</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Thumb Image</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1; @endphp
                                    @foreach ($getRecord as $value)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $value->Tittle }}</td>
                                        <td>{{ $value->Description }}</td>
                                        <td><img src="{{ asset('public/images/' . $value->Image) }}" alt="Image" width="80" height="80"></td>
                                        <td>
                                            <a href="{{ route('view-blogcontent', ['id' => $value->id]) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/blog/edit/'.$value->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('admin/brand/delete/'.$value->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
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


    <!-- Main content -->
    
    <!-- /.content -->
</div>
</section>
</main>
@endsection

@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->





@endsection