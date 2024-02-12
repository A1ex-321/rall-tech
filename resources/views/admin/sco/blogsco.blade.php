@extends('admin.layouts.app')


@section('content')
<style type="text/css">
    .ck-editor__editable_inline {
        height: 470Px;
    }
</style>
<style>
    #preview {
        display: flex;
        flex-wrap: wrap;
    }


    .image-container {
        margin-right: 10px;
    }
</style>
<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- ... (other scripts) ... -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Add Event</title>

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
                            <h1 class="m-0">Add Event</h1>
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
                                    <h3 class="card-title">Add Event data <small></small></h3>
                                </div>
                                <div class="container">
                                    <form action="{{ route('create-event') }}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title<span style="color:red">*</span></label>
                                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" value="{{ old('title') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Thumb Image<span style="color:red">*</span></label>
                                                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="{{ old('image') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Company <span style="color:red">*</span></label>
                                                        <input type="text" name="tech" class="form-control" id="exampleInputEmail1" placeholder="company" value="{{ old('tech') }}" required>
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
                                            <div class="col-md-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Multiple Image<span style="color:red">*</span></label>
            <input type="file" id="imageInput" name="images[]" class="form-control" value="" multiple required>
        </div>
    </div>
</div>

                                <div id="preview"></div>
                                <input type="hidden" id="imageIds" name="multiimage" value="">

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

            @include('admin.layouts.message')

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
                                        <th>company</th>
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
                                            {{$value->tech}}
                                        </td>
                                        <td>
                                            <a href="{{url('admin/eventedit/edit/'.$value->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/eve/delete/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    $(document).ready(function() {
        $('#imageInput').on('change', function() {
            var formData = new FormData();
            var files = $('#imageInput')[0].files;

            for (var i = 0; i < files.length; i++) {
                formData.append('multipleimage[]', files[i]);
            }

            // Add CSRF token to formData
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '{{ url("upload-multiple") }}', // Replace with your actual route
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Images uploaded successfully:', response);
                    // Handle the response as needed

                    // Fetch images after successful upload
                    fetchImages();

                },
                error: function(error) {
                    console.error('Error uploading images:', error);
                    // Handle errors if any
                }
            });
        });


        function fetchImages() {
            $.ajax({
                url: '{{ url("fetch-images") }}', // Replace with your actual route for fetching images
                method: 'GET',
                success: function(response) {
                    // Clear previous preview
                    $('#preview').empty();

                    var imageIds = ''; // String to store image IDs

                    // Loop through the image URLs and create image elements for preview
                    response.images.forEach(function(imageUrl) {
                        var imageHtml = '<div class="preview-item" style="position: relative; width: 100px; height: 100px; margin-right: 25px; margin-bottom: 25px;">';
                        imageHtml += '<img src="' + imageUrl.url + '" class="preview-image" alt="Preview Image" style="width: 100%; height: 100%;">';
                        imageHtml += '<button class="delete-btn" data-id="' + imageUrl.id + '" style="position: absolute; top: 0; right: 0; background-color: black; border: none; padding: 5px; cursor: pointer; color: red; font-size: 16px;" type="button">&#10005;</button>';
                        imageHtml += '</div>';

                        $('#preview').append(imageHtml);

                        // Append the image ID to the string
                        imageIds += imageUrl.id + ',';

                    });

                    // Remove the trailing comma
                    imageIds = imageIds.slice(0, -1);

                    // Set the value of the hidden input
                    $('#imageIds').val(imageIds);
                },
                error: function(error) {
                    console.error('Error fetching images:', error);
                    // Handle errors if any
                }
            });
        }

        // Add CSRF token to formData
        // formData.append('_token', '{{ csrf_token() }}');
        var clickCount = 0;

        $(document).on('click', '.delete-btn', function() {
            var id = $(this).data('id');
            deleteImage(id);
            fetchImages(); // Call fetchImages after deleting an image
            fetchImages();
        });


        function deleteImage(id) {
            $.ajax({
                url: '/delete-image/' + id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response.message);
                    // Handle success, maybe remove the deleted image from the UI
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error('XHR:', xhr);
                    console.error('Status:', textStatus);
                    console.error('Error Thrown:', errorThrown);
                }
            });
        }


        // Fetch images on page load
        fetchImages();

    });

    // function fetch(){

    // }
</script>

@endsection




@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->





@endsection