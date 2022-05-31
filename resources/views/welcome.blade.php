@extends('layout.app')
@section('title', 'La Crein | Home')

@section('content')
@include("partials.header")
<div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
    <style>

        .texxt{
            display: flex;
            justify-content: center;
            font-family: "Lucida Console", monospace, sans-serif;
            font-size: 30px;
        }
        .texxt{
            padding: 10px 10px 10px 10px;
            background-color: #007bff;
            color: white;
            margin-bottom: 10px;
            /*border-radius: 20px;*/
        }
        .texxt >a{
            text-decoration: none;
            color: white;
        }
    </style>
    <div class="texxt">
        <h1 class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">The Latest Actual Posts</h1>
    </div>
    @foreach($posts as $post)
        @include("posts.partials.item", ["post" => $post])
    @endforeach
    <div class="texxt">
        <h1 class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">If you want to see more posts click<a href="{{route("posts.index")}}"> here!</a></h1>
    </div>
</div>
@endsection
