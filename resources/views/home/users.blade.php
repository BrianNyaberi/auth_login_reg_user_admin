@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Users Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>


        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the user(s) data.</p>
        @endguest
    </div>
@endsection
