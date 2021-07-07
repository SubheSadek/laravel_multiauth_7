@extends('admin.admin_layouts')
@section('title','Admin dashboard')

@section('content')
 <div class="container">
     Admin dashboard
     <a href="{{route('admin.register')}}">Register</a>
     <a href="{{route('admin.logout')}}">Logout</a>
 </div>
@endsection