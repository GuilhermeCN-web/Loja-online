<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'cabecalho.php';
   ?>
   
   
</head>
    
<body>
   <?php include_once 'navbar.php';  ?>
<div class="container">
<div class="row mt-3">
    <div class="col-md-12 col-sm-12">
        <?php
            $pagina = filter_input(INPUT_GET, 'p');
            if(isset($pagina) || !empty($pagina)) {
                include_once $pagina . '.php';
            }else{
                include_once 'home.php';
            }
        ?>
    </div>
</div>
</div>
    <?php include_once 'plugins.php';  ?>
</body>

</html>