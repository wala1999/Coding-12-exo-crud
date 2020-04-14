<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">
            <h1 class="text-center pt-5">Objet create</h1>
            <form action="/portfolioedit/store" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="mt-5">Titre Secondaire</label>
                <input type="text" name="img_name" id="" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="ExampleInputEmail" class="mt-5">Description Secondaire</label>
                <input type="text" name="img_desc" id="" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="" class="mt-5">Image URL</label>
                <input type="text" name="img_path" id="" class="form-control" value="">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
        </div>

    </div>

</div>
</body>
</html>