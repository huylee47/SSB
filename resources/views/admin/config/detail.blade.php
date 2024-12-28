@extends('admin.layouts.master')
@section('main')
    <div id="main">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Config</title>
    <link rel="stylesheet" href="{{ asset('assets/css/config.css') }}">
</head>
<body>
<h1>Detailed Config</h1>
<form method="post"  action="{{ route('config.edit',$config->id)}}">
    @csrf
    <div>
        <label for="title">ID:</label>
        <input  type="number" id="id" name="id" readonly value="{{$config->id}}">
    </div>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" readonly value="{{$config->title}}">
    </div>
    <div>
        <label for="description">Description:</label>
        @isset($config->description)
            <textarea type="text" id="description" name="description" readonly value="{{$config->description}}">{{$config->description}}</textarea>
        @else
            <textarea type="text" id="description" name="description" readonly value="{{$config->description}}"></textarea>
        @endIf
    </div>
    <div>
        <label for="logo">Logo URL:</label>
        <input type="text" id="logo" name="logo" readonly value="{{$config->logo}}">
    </div>
    <div>
        <label for="logo">Facebook URL:</label>
        <input type="text" id="facebook" name="facebook" readonly value="{{$config->facebook}}">
    </div>
    <div>
        <label for="favicon">Favicon URL:</label>
        <input type="text" id="favicon" name="favicon" readonly value="{{$config->favicon}}">
    </div>
    <div>
        <label for="hotline">Hotline:</label>
        <input type="text" id="hotline" name="hotline" readonly value="{{$config->hotline}}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" readonly value="{{$config->email}}">
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" readonly value="{{$config->address}}">
    </div>
    <div>
        <label for="map">Map Embed Code:</label>
        @isset($config->map)
        <textarea type="text" id="map" name="map" readonly value="{{$config->map}}">{{$config->map}}</textarea>
        @else
            <textarea type="text" id="map" name="map" readonly value="{{$config->map}}"></textarea>
        @endIf
    </div>
<button type="submit">Edit</button>
</form>
</body>
</html>
    </div>
