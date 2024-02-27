@extends('admin.layouts.app')


@section('content')
<style type="text/css">
    .ck-editor__editable_inline {
        height: 480Px;
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
<style>
    /* Add your custom styles for the modal and input text boxes here */
    #feedback-modal .modal-dialog {
        max-width: 800px;
        /* Set your desired modal width */
    }

    .modal-body input[type="text"],
    .modal-body input[type="email"] {
        width: 100%;
        /* Set your desired input text box width */
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog</title>

    <!-- Include jQuery -->





    <!-- Include TinyMCE from CDN -->
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script> -->


    <!-- Include Select2 from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

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
                    <h1 class="m-0">Edit Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item active">
                            <button id="errorsco" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#feedback-modal">SEO</button>
                        </li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div id="feedback-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit SEO</h3>
                    <a href="#" class="btn" data-dismiss="modal">×</a>

                </div>
                <div class="modal-body" style="overflow-y: auto;">
                    <form action="{{ route('sco-update', ['id' => $getRecord->id])}}" method="post" enctype="multipart/form-data" id="sco">
                        {{csrf_field()}}
                        <div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Title<span style="color:red"></span></label>
            <input type="text" name="metatitle" class="form-control" id="exampleInputEmail1" placeholder="metatitle" value="{{$getRecord->metatitle}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Title<span style="color:red"></span></label>
            <input type="text" name="ogtitle" class="form-control" id="exampleInputEmail1" placeholder="ogtitle" value="{{$getRecord->ogtitle}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Description<span style="color:red"></span></label>
            <textarea name="metadescription" class="form-control" id="exampleInputEmail1" placeholder="Description" style="height: 100px;">{{$getRecord->metadescription}}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Description<span style="color:red"></span></label>
            <textarea name="ogdescription" class="form-control" id="exampleInputEmail1" placeholder="Description" style="height: 100px;">{{$getRecord->ogdescription}}</textarea>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Image<span style="color:red"></span></label>
            <input type="file" name="ogimage" class="form-control" id="exampleInputEmail1" placeholder="ogimage" value="{{$getRecord->ogimage}}">
        </div>
        @if ($getRecord->ogimage)
        <div class="form-group">
            <img src="{{ asset('public/images/' . $getRecord->ogimage) }}" alt="Uploaded Image" style="max-width: 100px; max-height: 70px;">
        </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG URL<span style="color:red"></span></label>
            <input type="text" name="ogurl" class="form-control" id="exampleInputEmail1" placeholder="ogurl" value="{{$getRecord->ogurl}}">
        </div>
    </div>
</div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug<span style="color:red"></span></label>
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="slug" value="{{$getRecord->slug}}">
                            <p id="slug-error" style="color: red;"></p>
                            @error('slug')
                            <p style="color: red;">{{ $message }}</p>
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        console.log('Script executed');

        $('#feedback-modal').modal('show');

        // Scroll to the element with the ID 'slug' within the modal using animate
        var modalBody = $('#feedback-modal .modal-body');
        var slugElement = $('#slug');

        // Calculate the difference between the top of the slug element and the top of the modal body
        var scrollOffset = slugElement.offset().top - modalBody.offset().top;

        // Use animate for smooth scrolling
        modalBody.animate({ scrollTop: scrollOffset }, 1000); // You can adjust the duration as needed
        $('.toast').toast({ delay: 5000 }); // Set the duration of the toast
        $('.toast-body').text('slug already exist'); // Set the error message
        $('.toast').toast('show');
    });
</script>

<!-- Placeholder for the toast -->
<!-- Placeholder for the toast -->
<div aria-live="polite" aria-atomic="true" style="position: fixed; bottom: 0; right: 0; min-width: 320px; height: -50px;">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" style="background-color: red;">
        <div class="toast-header" style="background-color: red;">
            <strong class="mr-auto text-white">Error</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="toast-body text-white">
            slug already exists <!-- Update the error message here -->
        </div>
    </div>
</div>




                            @enderror

                        </div>
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">OG Type<span style="color:red"></span></label>
                            <input type="text" name="ogtype" class="form-control" id="exampleInputEmail1" placeholder="ogtype" value="{{$getRecord->ogtype}}">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submit">Update SEO</button>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                    <!-- Your JavaScript code -->
                    <!-- <script>
    // Function to check the availability of the slug
    function checkSlugAvailability() {
        const slugInput = $('input[name="slug"]');
        const slugValue = slugInput.val();

        // Make an AJAX request to your Laravel route
        $.ajax({
            url: '/validate-slug',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', // Ensure proper syntax
                slug: slugValue
            },
            success: function(response) {
                const messageElement = $('#slugAvailabilityMessage');

                if (response.available) {} else {
                    $('#slug-error').text(response.exists ? 'Slug already exists' : '');
                }
            },
            error: function(error) {
                console.error('Error checking slug availability:', error);
            }
        });
    }
    // Attach the function to the 'change' event of the slug input
    $('input[name="slug"]').on('change', checkSlugAvailability);
</script> -->
                    </form>

                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                </div>
                <!-- Your existing HTML code -->


                <!-- Any other HTML code -->

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Blog data <small></small></h3>
                        </div>
                        <div class="container">
                            <form action="{{ route('event-update', ['id' => $getRecord->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}


                                <div class="form-row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Title<span style="color:red">*</span></label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title" value="{{$getRecord->title}}" >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Thumb Image<span style="color:red">*</span></label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="{{$getRecord->image}}">
        </div>
        @if ($getRecord->image)
        <div class="form-group">
            <img src="{{ asset('public/images/' . $getRecord->image) }}" alt="Uploaded Image" style="max-width: 100px; max-height: 60px;">
        </div>
        @endif
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">company<span style="color:red">*</span></label>
            <input type="text" name="tech" class="form-control" id="exampleInputEmail1" placeholder="company" value="{{$getRecord->tech}}">
        </div>
     
    </div>
</div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description<span style="color:red"></span></label>
                                        <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Description" style="width: 100%; height: 70px;">{{$getRecord->description}}</textarea>


                                    </div>
                                    <div class="form-group">
                                        <label for="editor">Content</label>
                                        <textarea name="content" id="editor" style="height: 250px; visibility: hidden;">{{$getRecord->content}}</textarea>
                                    </div>
                                    <input type="hidden" id="imageIds" name="multiimage" value="">
                                    <!-- <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Multiple Image<span style="color:red">*</span></label>
                                                    <input type="file" id="imageInput" name="images[]" class="form-control" value="" multiple>
                                                </div>
                                            </div> -->
                                        

                                        <div id="preview"></div>
                                   
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
    <!-- Main content -->

    <!-- /.content -->
</div>




<!-- Your scripts -->
<!-- ... (previous code) ... -->
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
            }
            // ,
            //  plugins: ['color', 'fontSize', 'fontFamily', 'fontBackgroundColor', 'fontColor', 'ckfinder'],
            //  toolbar: ['heading', '|', 'bold', 'italic', 'underline', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|', 'colorPicker', 'bulletedList', 'numberedList', '|', 'undo', 'redo'],

        })

        .catch(error => {
            console.error(error);
        });
</script>
<!-- Include jQuery library -->
<!-- Include jQuery library -->
<scrip>
    <!-- Include jQuery library -->



    <!-- Your modal HTML -->
    <div class="modal" id="validation-error-modal" style="display: none;">
        <!-- Modal content -->
        <p>Slug already exists. Please choose a different one.</p>
    </div>

    </script>

    <!-- Your JavaScript code -->



    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Your JavaScript code -->

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
                        var imageHtml = '<div class="preview-item" style="position: relative; width: 100px; height: 100px;">';
                        imageHtml += '<img src="' + imageUrl.url + '" class="preview-image" alt="Preview Image" style="width: 100%; height: 100%;">';
                        imageHtml += '<button class="delete-btn" data-id="' + imageUrl.id + '" style="position: absolute; top: 0; right: 0; background-color: white; border: none; padding: 5px; cursor: pointer; color: red; font-size: 16px;" type="button">&#10005;</button>';
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




