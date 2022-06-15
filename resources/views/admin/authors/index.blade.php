@extends('admin.layout.master')

@section('content')

    @include('admin.layout.masseges')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Authors</h3>

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

                        <th style="width: 1%">
                            #
                        </th>

                        <th>
                            Author Name
                        </th>

                        <th>
                            Birth Date
                        </th>
                        <th>
                            Author Address
                        </th>
                        <th>
                            Author Email
                        </th>

                        <th>
                            Action
                        </th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach($authors as $author)

                        <tr>

                            <td>
                                {{$loop->iteration}}
                            </td>

                            <td>
                                <a>

                                    {{$author->name}}
                                </a>
                                <br/>
                                <small>
                                    Created {{$author->created_at}}
                                </small>
                            </td>
                            <td>
                                {{$author->BD}}
                            </td>

                            <td>
                                {{$author->address}}
                            </td>

                            <td>
                                {{$author->email}}
                            </td>

                            <td class="project-actions text-right">
                                <a style="float: left ; margin: 10px" class="btn btn-primary btn-sm"
                                   href="{{route('author.show',$author)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a style="float: left ; margin: 10px" class="btn btn-info btn-sm"
                                   href="{{route('author.edit',$author)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form style="float: left ; margin: 10px" method="post"
                                      action="{{route('author.destroy',$author)}}">
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
        {{$authors->links()}}
    </section>
@endsection

@section('title')
    authors page
@endsection
