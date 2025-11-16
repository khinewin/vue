@extends("layouts.app")
@section("title", "Signin ")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @include("partials.message")
            <h1 class="text-center my-4">Our Fun Project</h1>
            <div>Continued to your session.</div>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('post.login') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control">
                            @error("email")
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                             @error("password")
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Signin</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>Don't have an account ? <a href="{{ route("register") }}">Create now</a></div>
        </div>
    </div>
</div>

@stop