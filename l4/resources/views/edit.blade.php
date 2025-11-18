@extends("layouts.app")
@section("title", "Edit post")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @include("partials.message")
            <div class="card shadow">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('update.post') }}" method="post">
                        <input type="hidden" value="{{$p->id}}" name="id">
                        @csrf
                         <div class="form-group mb-3">
                            <label for="post_image" class="form-label">Post Image</label>
                            <input class="form-control" type="file" name="post_image" id="post_image">
                            @error("post_image")
                                <div  class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input value="{{$p->title}}" class="form-control" type="text" name="title" id="title">
                            @error("title")
                                <div  class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" class="form-control">{{$p->content}}</textarea>
                            @error("content")
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
                            <a href="/" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    </div>
</div>

@stop