
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="index.html">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="/aboutedit">About Us</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/portfolioedit">Portfolio</a></li>
          <li><a href="/edittestimonial">Testimonials</a></li>
          <li><a href="#team">Team</a></li>

           
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->
    
<h1 class="text-center">About edit</h1>
    <div class="text-center">
        <a href="/aboutedit/create" class="btn btn-warning">Create</a>
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
    @foreach ($about as $about)

<section>
    <div class="container mt-2">
        <div class="row">
            <div class="col-1">
                <div class="text-center">
                    <p>{{$about->id}}</p>
                </div>
            </div>

            <div class="col-3">
                <p>{{$about->titre2}}</p>
            </div>

            <div class="col-3">
                <p>{{$about->description2}}</p>
            </div>

            <div class="col-3">
                <p>{{$about->img_about}}</p>
            </div>
            <div class="col-3">
                <a href="/aboutedit/{{$about->id}}/edit" class="btn btn-outline-success">Update</a>
                <a href="/aboutedit/{{$about->id}}/destroy" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>
