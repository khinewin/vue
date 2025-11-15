@extends("layouts.app")
@section("title", "Signup ")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h1>Signup new user account</h1>
            <div class="card shadow">
                <div class="card-body">
                    <form action="">
                         <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>Already have an account ? <a href="{{ route("login") }}">Sign</a></div>
        </div>
    </div>
</div>

@stop