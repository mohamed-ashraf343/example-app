
@extends('layouts.app')
@section('content')
    <div class="text-center">
        <a href="" class="btn btn-success">Create Post</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
                 {{--     @dd($posts, $post)--}}
        @foreach($posts as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['titel']}}</td>
                <td>{{$post['postedby']}}</td>
                <td>{{$post['created_at']}}</td>
                <td>
                 {{-- "{{route('post.posts.show',$post['id'])}}"  dinamic URL    --}}
                    <a href="{{route('post.posts.show',$post['id'])}}" class="btn btn-info">View</a>
                    <a href="" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="">
                        @csrf
                        {{-- @method('DELETE') --}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
         @endforeach



        </tbody>
    </table>
    @endsection    




