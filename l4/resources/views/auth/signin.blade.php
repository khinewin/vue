@extends("layouts.app")
@section("title", "Signin ")

@section("content")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h1>Signin to project</h1>
            <div class="card shadow">
                <div class="card-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Signin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop