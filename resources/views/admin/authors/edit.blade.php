@extends('admin.layout.master')

@section('content')
    <!-- Main content -->
    @include('admin.layout.masseges')

    <section class="content">
        <form method="post" action="{{route('author.update',$author)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Author</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Author Name</label>
                                <input value="{{$author->name}}" type="text" name="name" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Birth Date</label>
                                <input value="{{$author->BD}}" type="date" name="BD" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Author Address</label>
                                <input value="{{$author->address}}" type="text" name="address" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Author Email</label>
                                <input value="{{$author->email}}" type="email" name="email" id="inputName"
                                       class="form-control">
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Edit Author" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection

@section('title')
    Edit Author page
@endsection
