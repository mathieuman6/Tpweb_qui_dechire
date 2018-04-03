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




<div class="box">
  <div class="columns is-mobile is-centered">
    <div class="column is-narrow">
          <form role="form" method="post" action="../../../../Tpweb_qui_dechire-master/new_insert_recipe">

            <div class="field">
              <label class="label">Nom :</label>
              <div class="control">
                <input name="name" class="input" type="text" placeholder="Nom de la Recette">
              </div>
            </div>

            <div class="field">
              <span id="nb_sections" style="display:None;">1</span>
              <label class="label">Ingrédients :</label>
              <a id="add_input" class="button is-primary">+</a>
              <div class="field" id="ingredients" >
                <div class="control list_ingredients">
                  <div class="select is-success">
                    <select class="options" name="ingredient0">
                      <?php foreach ($ingredients as $ingredient):?>
                          <option value="<?php echo $ingredient['name']?>"><?php echo $ingredient['name']?></option>

                      <?php endforeach;?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Description :</label>
              <div class="field">
                <div class="control">
                  <textarea name="text" class="textarea is-primary" type="text" placeholder="Description de la recette"></textarea>
                </div>
              </div>
            </div>


            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
            </div>

          </form>









    </div>
  </div>
</div>


<script>
  function addInput(){
     var dropdown_list = document.getElementsByClassName('list_ingredients');
     var dropdown = dropdown_list[dropdown_list.length-1].cloneNode(true);
     var nb = document.getElementById('nb_sections').innerHTML;
     dropdown.id = '';
     var options = document.getElementsByClassName('options');
     options[options.length-1].name="ingredient"+nb;
     document.getElementById('nb_sections').innerHTML = (Number(nb)+1).toString();
     document.getElementById('ingredients').appendChild(dropdown);
  }
  document.getElementById('add_input').addEventListener("click", addInput);


</script>


<script src="../../../../../Tpweb_qui_dechire-master/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../../Tpweb_qui_dechire-master/assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="../../../../../Tpweb_qui_dechire-master/assets/js/plugins.js"></script>
<script src="../../../../../Tpweb_qui_dechire-master/assets/js/main.js"></script>
