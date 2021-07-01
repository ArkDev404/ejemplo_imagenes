<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<title>Mi Pagina</title>
</head>
<body>


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Insertar Imagen</h5>
            <p class="card-text">
                <form id="formulario" >
                  <div class="form-group">
                      <label for="my-input">Foto:</label>
                      <input id="my-input" class="form-control-file" type="file" name="foto">
                  </div>
                  <button class="btn btn-primary" type="submit">Agregar</button>
                </form>
            </p>
        </div>
    </div>


    <?php 
    
    include "includes/config.php";

        $query = "SELECT * FROM imagenes";
        $result = $conexion -> query($query);

        while ($user = $result -> fetch_assoc()) {

            echo "<img src='img/".$user['url_foto']."' alt='imagen'>";

        }

    ?>


    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/app.js"></script>
</body>
</html>