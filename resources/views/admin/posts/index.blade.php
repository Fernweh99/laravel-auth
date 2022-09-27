@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">slug</th>
          <th scope="col">created_at</th>
          <th scope="col">last_update</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($posts as $post)
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>{{$post->slug}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>
          <td>
            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.show', $post)}}">
              <i class="fa-regular fa-eye"></i>
            </a>
            <a class="btn btn-warning btn-sm" href="#">
              <i class="fa-regular fa-pen-to-square"></i>
            </a>
            <a class="btn btn-danger btn-sm" href="#">
              <i class="fa-solid fa-trash"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection