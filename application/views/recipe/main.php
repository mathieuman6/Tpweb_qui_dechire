<section class="hero is-light" style="border-bottom-style: solid;border-bottom-width: 0px;padding-bottom: 1%;">
  <div class="container has-text-centered">
    <h1 class="title">Recherche une recette</h1>
    <div class="field has-addons" style="padding-left: 35%;">
      <div class="control">
        <input class="input" type="text" placeholder="Trouver une recette">
      </div>
      <div class="control">
        <a class="button is-info">
          Search
        </a>
      </div>
    </div>

</section>

<section>
  <div class="columns" style="padding-top: 2%;padding-left: 3%;padding-right: 3%;">
  <?php
  $nbrecettes=0;
  foreach ($recipes as $recipe):
  ?>
  <?php
  $nbrecettes++;
  if($nbrecettes%4==0){
    echo '</div></section><div class="columns" style="padding-top: 2%;padding-left: 3%;padding-right: 3%;">';
    $nbrecettes++;
  }
  ?>
    <div class="column">
      <div class="card" style="max-width:300px;min-height:455px">
        <div class="card-image">
          <figure class="image is-4by3">
            <a href="../../../../Tpweb_qui_dechire-master/recipe/<?php echo str_replace(' ','_',$recipe->name) ?>"><img src="assets/img/kebab.jpg" alt="kebab"></a>
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4 is-warning">
                  <?php echo str_replace('_',' ',$recipe->name) ?>
              </p>
            </div>
          </div>

          <div class="content">
            <?php echo substr($recipe->text,0,200); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</section>

  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

</body>
