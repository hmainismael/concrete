<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    
     <link href="<?php echo $view->getThemePath(); ?>/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo $view->getThemePath(); ?>/assets/css/factorian.css" rel="stylesheet">
     <script src="<?php echo $view->getThemePath(); ?>/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
     <?php Loader::element('header_required'); ?>
     
     <style>
     ul.nav{
      display: inline-block;
     }
     ul.nav li 
     {
      display: inline-block;
      height: 50px;
      padding-top: 5px;
     }
     nav{
      text-transform: uppercase;
     }
     button {
      background-color: #e67300 !important;
      border-color: #e67300 !important;
     }
     img {
      border-radius: 5px;
     }
     </style>
  </head>

  <body>
    <div class="<?=$c->getPageWrapperClass()?>">
      <header>
          <nav class="navbar navbar-default" style="margin-top:0px;margin-bottom: 0px">
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">FACTORIAN</a>
              </div>
              <ul class="nav navbar-nav navbar-right" style="padding-left:0px;padding-right:0px;width:40%">
                <?php
                  $a = new GlobalArea('Menu');
                  $a->display($c);
                ?>
              </ul>
            </div>
          </nav>
      </header>
    </div>

