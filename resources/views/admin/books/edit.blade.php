@extends('admin.layout.master')

@section('content')
 <!-- Main content -->
 @include('admin.layout.masseges')
 <section class="content">
     <form method="post" action="{{route('book.update',$book)}}"  enctype="multipart/form-data">
         @csrf
         @method('PUT')
      <div class="row">
        <div class="col-md">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Book</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Post Title</label>
                <input type="text" name="title" id="inputName" class="form-control" value="{{$book->title}}">
              </div>

                <div class="form-group">
                    <label for="inputDescription">Book description</label>
                    <textarea name="description" id="inputDescription" class="form-control"
                              rows="4">{{$book->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="inputName">Book Publisher</label>
                    <input value="{{$book->publisher}}" type="text" name="publisher" id="inputName"
                           class="form-control">
                </div>


                <div class="form-group">
                    <label for="inputName">Book Edition</label>
                    <input value="{{$book->edition}}" type="number" name="edition" id="inputName"
                           class="form-control">
                </div>


                <div class="form-group">
                    <label for="inputName">Book Language</label>
                    <input value="{{$book->language}}" type="text" name="language" id="inputName"
                           class="form-control">
                </div>


                <div class="form-group">
                    <label for="inputName">Book Page Number</label>
                    <input value="{{$book->page_number}}" type="number" name="page_number" id="inputName"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputName">Book Available</label>
                    <input value="{{$book->available}}" type="number" name="available" id="inputName"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputName">Book Price</label>
                    <input value="{{$book->price}}" type="number" name="price" id="inputName"
                           class="form-control">
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="inputName">Current Image</label>
                        <br>
                        <img alt="Image" class="table-avatar" style=" border-radius: 2%; display: inline;width: 4rem;" src="{{asset('book_image/'.$book->imageName)}}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image_name">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="inputName">Current pdf</label>
                        <br>
                        <a href="{{asset('book_pdf/'.$book->bookPDF)}}" target="_blank">
                            {{$book->bookPDF}}
                        </a>
                    </div>
                </div>


                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="pdf_name">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                </div>


              <div class="form-group">
                <label for="inputStatus">Category</label>
                <select name="cat_id" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                    @foreach($categories as $cat)
                  <option value="{{$cat->id}}" {{$book->category_id == $cat->id ? 'selected' : ''}}>
                  {{$cat->title}}
                  </option>
                    @endforeach
                </select>
              </div>


                <div class="form-group">
                    <label for="inputStatus">Category</label>
                    <select name="auth_id" id="inputStatus" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        @foreach($authors as $auth)
                            <option value="{{$auth->id}}" {{$book->author_id == $auth->id ? 'selected' : ''}}>
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
          <input type="submit" value="Edit Book" class="btn btn-success float-right">
        </div>
      </div>
     </form>
    </section>
    <!-- /.content -->
@endsection

@section('title')
Edit book page
@endsection
