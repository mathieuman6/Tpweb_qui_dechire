<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <?php echo str_replace("_"," ",end($this->uri->segments)); ?>
      </h1>
      <h2 class="subtitle">
        Hum' que c'est bon !
      </h2>
    </div>
  </div>
</section>

<section class="hero is-light" style="border-bottom-style: solid;border-bottom-width: 0px;padding-bottom: 1%;">
  <div class="container has-text-centered">
    <div class="field has-addons" style="padding-left: 35%; padding-top: 15px">
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




<section class="recette">
      <h1 class="title is-1" > <?php echo str_replace("_"," ",end($this->uri->segments));?> : La meilleur recette</h1>
      <img class="kebabLMR" src="../assets/img/kebabLMR.jpg" alt="kebab">
</section>

<div class="box">
  <article class="media">
    <section class="guillaume">
      <div class="columns">
        <div class="column">
          <h2 class="title is-3">ingredient pour <span class="minus-button glyphicon glyphicon-minus-sign"></span><span class="nbpers">1</span><span class="plus-button glyphicon glyphicon-plus-sign"></span> personnes</h2>

          <?php foreach ($ingredients as $ingredient):?>
              <p>
              <?php
                $html='';
                if(isset($ingredient['quantity'])){
                  if(isset($ingredient['quantity_unit'])){
                    $html = '<span class="quantity">'.$ingredient['quantity'].' <span class="quant-type">'.$ingredient['quantity_unit'].' </span></span>'.$ingredient['ingredient'];
                  } else {
                    $html = '<span class="quantity">'.$ingredient['quantity'].' </span> '.$ingredient['ingredient'];
                  }
                }
                echo $html;
              ?>
            </p>
          <?php endforeach;?>


        </div>
        <div class="column">
          <h2 class="title is-3 preparation">préparation</h2
                    <?php foreach ($recipe as $recip):?>
                  <?php $text = $recip->text; ?>
                <?php
                echo 'test';
                  $text = str_replace('##','</p><p>',$text);
                  $text = substr($text,4);
                  echo html_entity_decode($text);
                ?>
              <?php endforeach;?>
        </div>
      </div>
    </section>
  </article>
</div>




<script src="../../../Tpweb_qui_dechire-master/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../Tpweb_qui_dechire-master/assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="../../../Tpweb_qui_dechire-master/assets/js/plugins.js"></script>
<script src="../../../Tpweb_qui_dechire-master/assets/js/main.js"></script>
