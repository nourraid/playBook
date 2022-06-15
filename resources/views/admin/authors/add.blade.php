@extends('admin.layout.master')

@section('content')
    <!-- Main content -->
    @include('admin.layout.masseges')
    <section class="content">
        <form method="post" action="{{route('author.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create New author</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Author Name</label>
                                <input value="{{old('name')}}" type="text" name="name" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Birth Date</label>
                                <input value="{{old('BD')}}" type="date" name="BD" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Author Address</label>
                                <input value="{{old('address')}}" type="text" name="address" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Author Email</label>
                                <input value="{{old('email')}}" type="email" name="email" id="inputName"
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
                    <input type="submit" value="Add New author" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection

@section('title')
    Add author page
@endsection
