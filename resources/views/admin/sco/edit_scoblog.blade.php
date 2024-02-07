@extends('admin.layouts.app')


@section('content')

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
                    <h1 class="m-0">Add link</h1>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit New content blog <small></small></h3>
                        </div>
                        <div class="container">
                            <form action="{{ route('scoblog-update', ['id' => $getRecord->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="card-body">
                                    <!-- Form inputs here -->
                                    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Title<span style="color:red"></span></label>
            <input type="text" name="metatitle" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->metatitle}}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Description<span style="color:red"></span></label>
            <input type="text" name="metadescription" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->metadescription}}" >
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Title<span style="color:red"></span></label>
            <input type="text" name="ogtitle" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->ogtitle}}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Description<span style="color:red"></span></label>
            <input type="text" name="ogdescription" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->ogdescription}}" >
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG Image<span style="color:red"></span></label>
            <input type="text" name="ogimage" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->ogimage}}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">OG URL<span style="color:red"></span></label>
            <input type="text" name="ogurl" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->ogurl}}" >
        </div>
    </div>
</div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">OG Type<span style="color:red"></span></label>
                                        <input type="text" name="ogtype" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$getRecord->ogtype}}" >
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">update</button>
                                </div>
                            </form>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
   
@endsection

@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->



</section>
</main>

@endsection