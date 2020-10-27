@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{$item->title}}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('travel-package.update', $item->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                        value="{{$item->title}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="location"
                        value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" rows="10"
                        class="d-block w-100 form-control">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="location">Featured Event</label>
                    <input type="text" name="featured_event" id="featured_event" class="form-control"
                        placeholder="featured_event" value="{{$item->featured_event}}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" name="language" id="language" class="form-control" placeholder="language"
                        value="{{$item->language}}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" name="foods" id="foods" class="form-control" placeholder="foods"
                        value="{{$item->foods}}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" class="form-control"
                        placeholder="departure_date" value="{{$item->departure_date}}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" placeholder="duration"
                        value="{{$item->duration}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="type"
                        value="{{$item->type}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input price="number" name="price" id="price" class="form-control" placeholder="price"
                        value="{{$item->price}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
