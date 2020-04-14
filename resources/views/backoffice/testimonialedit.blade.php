@extends('layout.admin')
@section('content')

   @foreach  
<h1 class="text-center">Testimonial edit</h1>
    <div class="text-center">
        <a href="/edittestimonial/create" class="btn btn-warning">Create</a>
    </div>
    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-1">
                <p>ID:</p>
            </div>
            <div class="col-1">
                <p>Titre:</p>
            </div>
            <div class="col-3">
                <p>Description:</p>
            </div>
            <div class="col-3">
                <p>Image:</p>
            </div>
            <div class="col-3">
                <p>Action:</p>
            </div>
        </div>
    </div>
   

<section>
    <div class="container mt-2">
        <div class="row">
            <div class="col-1">
                <div class="text-center">
                    <p>{{$testimonial->id}}</p>
                </div>
            </div>

            <div class="col-3">
                <p>{{$testimonial->titre}}</p>
            </div>

            <div class="col-3">
                <p>{{$testimonial->description}}</p>
            </div>

            <div class="col-3">
                <p>{{$testimonial->img_path}}</p>
            </div>
            <div class="col-3">
                <a href="/testimonialedit/{{$portfolio->id}}/edit" class="btn btn-outline-success">Update</a>
                <a href="/testimonialedit/{{$portfolio->id}}/destroy" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>
