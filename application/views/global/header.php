<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="recette, bouffe">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
      <header>
        <div class="columns">
          <div class="column is-four-fifths">
            <img src="assets/img/logo-bonne_bouffe.png" class="logo" alt="logo">
          </br>
            <nav>
              <a href="index.html">Home</a> /
              <a href="/css/">List</a> /
              <a href="/js/">Manager</a>
            </nav>
          </div>
          <div class="column"></div>
          <div class="column">
                <button class="button is-link" style="margin-top: 10%;" class="admin">admin</button>
          </div>
        </div>

      </header>
      <section class="hero is-primary">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              <?php var_dump ($pageTitle) ?>
            </h1>
            <h2 class="subtitle">
              Hum' que c'est bon !
            </h2>
          </div>
        </div>
      </section>
