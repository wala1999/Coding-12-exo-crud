

<!--==========================
  Porfolio Section
  ============================-->

 
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Objets de la série</h3>
          <div class="section-title-divider"></div>
          <p class="objet-description text-white">Les objets sont l'un des éléments caractéristiques marquants du manga</p>
        </div>
      </div>

      <div class="row">
        @foreach($portfolios as $portfolio)
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url({{$portfolio->img_path}});" href="">
            <div class="details">
              <h4>{{$portfolio->img_name}}</h4>
              <p>{{$portfolio->img_desc}}</p>
          
            </div>
          </a>
        </div>
        @endforeach

      </div>
    </div>
  </section>


