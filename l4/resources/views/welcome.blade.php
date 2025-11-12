@extends("layouts.app")
@section("title", "Welcome")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @include("partials.message")
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('create.post') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" id="title">
                            @error("title")
                                <div  class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                            @error("content")
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold text-center table-primary">
                                <td>ID</td>
                                <td>Title</td>
                                <td>Content</td>
                                <td>Created Date</td>
                                <td>Updated Date</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->title}}</td>
                                <td>{{$p->content}}</td>
                                <td>{{date("d/m/Y h:i:s A", strtotime($p->created_at))}}</td>
                                <td>{{$p->updated_at}}</td>
                                <td>
                                    <a href="{{ route("post.edit", ["post_id"=>$p->id]) }}" class="btn btn-light btn-sm">Edit</a>
                                    <a href="{{ route("post.delete", ["post_id"=>$p->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@stop