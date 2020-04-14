
    <!-- ======= Services Section ======= -->

    <section id="services">
        <div class="container wow fadeInUp">
          <div class="row">
     
            <div class="col-md-12">
              <h3 class="section-title">Trame</h3>
              <div class="section-title-divider"></div>
              <p class="section-description"></p>
            </div>
          </div>
  
          <div class="row">
            @foreach($services as $service)
            <div class="col-md-6 service-item">
              <div class="service-icon"><i class="fa fa-desktop"></i></div>
              <h4 class="service-title"><a href="">{{$service->titre}}</a></h4>
              <p class="service-description">{{$service->description}}</p>
            </div>
            @endforeach
    
      </section><!-- End Services Section -->
      