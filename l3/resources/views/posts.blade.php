@extends("layouts.app")

@section("my_title", "Posts")

@section("my_content")

    <div class="container">
        <h1>Posts</h1>

        <ul>
            @foreach($all_posts as $p)
                <li>{{$p}}</li>
            @endforeach
        </ul>

        @if($isA)
            <div>this is true so see me</div>
        @endif

        @if($isA==true)
            <div>this is true</div>
        @elseif($isA == false)
            <div>this is false</div>
        @else
            <div>this is not true or false</div>
        @endif

    </div>

@stop