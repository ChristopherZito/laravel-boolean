@extends('layouts.main-layouts')
@section('content')
    <div class="container">
        Create new Element:
        <form 
        action="{{route('store')}}" 
        method="POST"
        enctype="multipart/form-data">

            @method("POST")
            @csrf

            <label for="sender">Sender</label><br>
            <input type="text" name="sender"><br>

            <label for="reciver">Reciver</label><br>
            <input type="text" name="reciver"><br>

            <label for="text">Text</label><br>
            <input type="text" name="text"><br>

            <label for="image">Image</label><br>
            <input type="file" name="image"><br>
            <br>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection