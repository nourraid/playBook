@extends('admin.layout.master')

@section('content')

    @include('admin.layout.masseges')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Books</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">

                    <thead>
                    <tr>
                        <th>
                            #
                        </th>

                        <th>
                            Title
                        </th>

                        <th>
                            description
                        </th>

                        <th>
                            publisher
                        </th>

                        <th>
                            edition
                        </th>

                        <th>
                            language
                        </th>

                        <th>
                            page number
                        </th>

                        <th>
                            available
                        </th>

                        <th>
                            price
                        </th>
                        <th>
                            image
                        </th>
                        <th>
                            PDF
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($books as $book)

                        <tr>

                            <td>
                                {{$loop->iteration}}
                            </td>

                            <td>
                                <a>

                                    {{$book->title}}
                                </a>
                                <br/>
                                <small>
                                    Created {{$book->created_at}}
                                </small>
                            </td>

                            <td>
                                {{$book->description}}
                            </td>
                            <td>
                                {{$book->publisher}}
                            </td>
                            <td>
                                {{$book->edition}}
                            </td>
                            <td>
                                {{$book->language}}
                            </td>
                            <td>
                                {{$book->page_number}}
                            </td>
                            <td>
                                {{$book->available}}
                            </td>
                            <td>
                                {{$book->price}}
                            </td>
                            <td>
                                <img alt="Image" class="table-avatar"
                                     style=" border-radius: 2%; display: inline;width: 4rem;"
                                     src="{{asset('book_image/'.$book->imageName)}}">
                            </td>
                            <td>
                                <a href="{{asset('book_pdf/'.$book->bookPDF)}}" target='_blank'>
                                    {{$book->bookPDF}}
                                </a>
                            </td>

                            <td>

                                {{$book->category->title??'no cat'}}
                            </td>


                            <td class="project-state">
                                {{$book->author->name ?? 'No User!!'}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('book.show',$book)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('book.edit',$book)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form method="post" action="{{route('book.destroy',$book)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">

                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>


                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$books->links()}}
    </section>
@endsection

@section('title')
    books page
@endsection
