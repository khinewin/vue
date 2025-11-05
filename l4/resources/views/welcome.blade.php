@extends("layouts.app")

@section("title", "Welcome")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-8">

        </div>
    </div>
</div>

@stop