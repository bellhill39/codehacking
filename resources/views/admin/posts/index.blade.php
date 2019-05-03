@extends('layouts.admin')


@section('content')

    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
              <th>Photo </th>
            <th>User </th>
            <th>Category </th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>


          </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                  <td><img height="50" src="{{$post->photo ? $post->photo->file : '/images/No_image_available.svg'}}"></td>
                  <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        @endif


@endsection