@extends('admin.layouts.app')


@section('content')
<style type="text/css">
    .ck-editor__editable_inline {
        height: 470Px;
    }
</style>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- ... (other scripts) ... -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Add Blog</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<!-- SweetAlert2 CSS -->

<main id="main" class="main">
    <section class="section dashboard" style="margin-left: -260px;
">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-0">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>




                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card card-primary">
                                <div class="card-header" style="background-color:
#6e9ee6
;">
                                    <h3 class="card-title">Add Blog data <small></small></h3>
                                </div>
                                <div class="container">
                                    <form action="{{ route('create-blogsco') }}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title<span style="color:red">*</span></label>
                                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" value="{{ old('title') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Thumb Image<span style="color:red">*</span></label>
                                                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="{{ old('image') }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description<span style="color:red"></span></label>
                                                <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Description" style="width: 100%; height: 100px;">{{ old('description') }}</textarea>


                                            </div>
                                            <div class="form-group">
                                                <label for="editor">Content</label>
                                                <textarea name="content" id="editor" style="height: 250px; visibility: hidden;">{{ old('content') }}</textarea>
                                            </div>


                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                    </form>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enabled Blogs</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover datatable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Thumb Image</th>
                                        <th>View Content</th>
                                        <th>Edit & Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1; @endphp
                                    @foreach ($getRecord as $value)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->description }}</td>
                                        <td><img src="{{ asset('public/images/' . $value->image) }}" alt="Thumb Image" style="max-width: 100px; max-height: 100px;"></td>
                                        <td>
                                            <button class="btn btn-success">
                                                <a href="{{route('view_blogcontent', ['id' => $value->id])}}" style="color: #fff; text-decoration: none;">
                                                    <i class="fas fa-eye"></i>  Content
                                                </a>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{url('admin/blogseo/edit/'.$value->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/blogseo/delete/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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




        <!-- Your scripts -->
        <!-- ... (previous code) ... -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- ... (other scripts) ... -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        ckfinder: {
                            uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                        }

                        // Add any other CKEditor configurations as needed
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            // Function to check the availability of the slug
            function checkSlugAvailability() {
                const slugInput = $('input[name="slug"]');
                const slugValue = slugInput.val();

                // Make an AJAX request to your Laravel route
                $.ajax({
                    url: '/check-slug-availability',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // Ensure proper syntax
                        slug: slugValue
                    },
                    success: function(response) {
                        const messageElement = $('#slugAvailabilityMessage');

                        if (response.available) {} else {
                            messageElement.text('Slug already exists. Please choose another one.');
                        }
                    },
                    error: function(error) {
                        console.error('Error checking slug availability:', error);
                    }
                });
            }
            // Attach the function to the 'change' event of the slug input
            $('input[name="slug"]').on('change', checkSlugAvailability);
        </script>
    </section>
</main>
@endsection




@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->





@endsection