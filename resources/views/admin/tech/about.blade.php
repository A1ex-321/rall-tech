@extends('admin.layouts.app')

<style>.datatable-input {
    display: none;
}
</style>
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
                            <h1 class="m-0">Design and Logo</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i> Add Design and logo</button>
                               
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Design</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('add-logo') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Photo:</label>
                                    <input type="file" class="form-control" id="recipient-name" name="image" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('add-test') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Title:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea class="form-control" id="message-text" name="description" required></textarea>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"> Tables</h5>

                                    <!-- Table with stripped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($getRecord as $value)
                                                <tr>
                                                    <td>{{$value->id}}</td>
                                                    <td><img src="{{ asset('public/images/' . $value->image) }}" style="width:100px;height:60px;" alt="Image"></td>
                                                    <td>


                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/design/deletelogo/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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

                            input:checked+.slider {
                                background-color: #2196F3;
                            }

                            input:focus+.slider {
                                box-shadow: 0 0 1px #2196F3;
                            }

                            input:checked+.slider:before {
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
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datatable').DataTable();
        
    });
    $('.datatable').DataTable({
    searching: false

});

</script>

<script>
    $(document).ready(function() {
        $('.edit-btn').on('click', function() {
            var id = $(this).data('id');
            $('#editForm').attr('action', "{{ route('updateclient', '') }}" + '/' + id);
            $.ajax({
                type: "GET",
                url: "{{ url('admin/client/edit') }}" + '/' + id,
                success: function(response) {
                    $('#editTitle').val(response.title);
                    $('#editdescription').val(response.description);
                   
                    // Update other input fields as needed
                }
            });
        });

        $('#updateRecord').on('click', function() {
            $('#editForm').submit();
        });
    });
</script>


@section('style')




@endsection