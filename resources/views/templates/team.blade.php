

<!--==========================
  Porfolio Section
  ============================-->

 
  <section id="portfolio2" >
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Personnages</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">One Piece possède son propre univers et met en scène une multitude de personnages hétérogènes. L'auteur accorde un soin particulier à la personnalité, l'aspect physique et l'histoire de ses personnages, même secondaires. Plusieurs groupes se distinguent.</p>
        </div>
      </div>

      <div class="row">
        @foreach($teams as $team)
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url({{$team->img_path}});" href="">
            <div class="details">
              <h4>{{$team->img_name}}</h4>
              <p>{{$team->img_desc}}</p>
            <p style="background-image: url({{$team->img_path}});" href=""></p>
          
            </div>
          </a>
        </div>
        @endforeach

      </div>
    </div>
  </section>


