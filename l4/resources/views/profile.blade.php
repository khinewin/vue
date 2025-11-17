@extends("layouts.app")
@section("title", "User Profile")

@section("content")
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h2> <small class="small">You are login as : </small> {{Auth::user()->name}}</h2>
                <ul>
                    <li>Email : {{Auth::user()->email}}</li>
                    <li>Member Since : {{Auth::user()->created_at->diffForHumans()}}</li>
                </ul>
                <a href="{{ route('logout') }}"  class="btn btn-outline-danger">Logout</a>
            </div>
        </div>
    </div>
@stop