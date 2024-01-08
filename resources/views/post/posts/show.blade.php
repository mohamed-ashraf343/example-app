
@extends('layouts.app')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Titel : {{$post['titel']}}</h5>
            <p class="card-text">Description : {{$post['Description']}} </p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name : {{$postinfo['name']}} </h5>
            <p class="card-text">Email : {{$postinfo['Email']}} </p>
            <p class="card-text">Created_At : {{$postinfo['created_at']}} </p>

            <p class="card-text"></p>
        </div>
    </div>

   @endsection 