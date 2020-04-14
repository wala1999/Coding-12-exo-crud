@extends('layout.admin')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">
            <form action="/store" method="post"></form>
            @csrf

            <div class="form-group">
                <label for="" class="mt-5">Titre Secondaire</label>
                <input type="text" name="titre2" id="" class="form-control" value="{{$testimonial->titre2}}">
            </div>
            <div class="form-group">
                <label for="ExampleInputEmail" class="mt-5">Description Secondaire</label>
                <input type="text" name="description2" id="" class="form-control" value="{{$testimonia;->description2}}">
            </div>
            <div class="form-group">
                <label for="" class="mt-5">Image URL</label>
                <input type="text" name="img_path" id="" class="form-control" value="{{$testimonial->img_path}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

        </div>

    </div>

</div>
