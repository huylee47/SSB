
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Config</title>
    <link rel="stylesheet" href="{{ asset('assets/css/config.css') }}">
</head>
<body>
<h1>Edit Config</h1>
<form
    action="{{ route('config.update',$config->id)}}"
    method="POST">
    @csrf
    @method('put')

    <div>
        <label for="title">ID:</label>
        <input readonly type="number" id="id" name="id" required value="{{$config->id}}">
    </div>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required value="{{$config->title}}">
    </div>
    <div>
        <label for="description">Description:</label>
        @isset($config->description)
            <textarea type="text" id="description" name="description" value="{{$config->description}}">{{$config->description}}</textarea>
        @else
            <textarea type="text" id="description" name="description" value="{{$config->description}}"></textarea>
        @endIf
    </div>
    <div>
        <label for="logo">Logo URL:</label>
        <input type="text" id="logo" name="logo" required value="{{$config->logo}}">
    </div>
    <div>
        <label for="logo">Facebook URL:</label>
        <input type="text" id="facebook" name="facebook" required value="{{$config->facebook}}">
    </div>
    <div>
        <label for="favicon">Favicon URL:</label>
        <input type="text" id="favicon" name="favicon" required value="{{$config->favicon}}">
    </div>
    <div>
        <label for="hotline">Hotline:</label>
        <input type="text" id="hotline" name="hotline" required value="{{$config->hotline}}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{$config->email}}">
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required value="{{$config->address}}">
    </div>
    <div>
        <label for="map">Map Embed Code:</label>
        @isset($config->map)
            <textarea type="text" id="map" name="map"  value="{{$config->map}}">{{$config->map}}</textarea>
        @else
            <textarea type="text" id="map" name="map"  value="{{$config->map}}"></textarea>
        @endIf
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>
