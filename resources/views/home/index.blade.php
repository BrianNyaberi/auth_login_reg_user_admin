@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Admin Dashboard</h1>
        <p class="lead">Only Admin can access this section.</p>
                <!-- Table for User Data -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>id </td>
                                <td>name </td>
                                <td>email </td>
                                <!-- Add more columns' data as needed -->
                            </tr>
                    </tbody>
                </table>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the user(s) data.</p>
        @endguest
    </div>
@endsection
