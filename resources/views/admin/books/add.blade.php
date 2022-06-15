@extends('admin.layout.master')

@section('content')
    <!-- Main content -->
    @include('admin.layout.masseges')
    <section class="content">
        <form method="post" action="{{route('book.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create New Book</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Book Title</label>
                                <input value="{{old('title')}}" type="text" name="title" id="inputName" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputDescription">Book description</label>
                                <textarea name="description" id="inputDescription" class="form-control"
                                          rows="4">{{old('description')}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Book Publisher</label>
                                <input value="{{old('publisher')}}" type="text" name="publisher" id="inputName"
                                       class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="inputName">Book Edition</label>
                                <input value="{{old('edition')}}" type="number" name="edition" id="inputName"
                                       class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="inputName">Book Language</label>
                                <input value="{{old('language')}}" type="text" name="language" id="inputName"
                                       class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="inputName">Book Page Number</label>
                                <input value="{{old('page_number')}}" type="number" name="page_number" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Book Available</label>
                                <input value="{{old('available')}}" type="number" name="available" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Book Price</label>
                                <input value="{{old('price')}}" type="number" name="price" id="inputName"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="imageName" value="{{old('imageName')}}">
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="bookPDF" value="{{old('bookPDF')}}">
                                    <label class="custom-file-label" for="customFile">Choose pdf</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select name="category_id" id="inputStat us" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}" {{old('category_id') == $cat->id ? 'selected' : ''}}>
                                            {{$cat->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Author</label>
                                <select name="author_id" id="inputStat us" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    @foreach($authors as $auth)
                                        <option value="{{$auth->id}}" {{old('author_id') == $auth->id ? 'selected' : ''}}>
                                            {{$auth->name}}
                                        </option>
                                    @endforeach
                                </select>
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
                    <input type="submit" value="Create New Post" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection

@section('title')
    Add Book page
@endsection
