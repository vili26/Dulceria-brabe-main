<?php
include './session.php';
 ?>
 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style_menu.css" rel="stylesheet">
    <title>Menú</title><link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	 <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<nav>
			<ul>
			<li><a href="menu.php">Inicio</a></li>
      <li><a href="venta/venta.php">Ventas</a></li>
        <?php if($_SESSION['rol'] == 1) {?>  
        <li><a href="empleado/empleado.php">Empleado</a></li> <?php } ?>
				<li><a href="cliente/cliente.php">Clientes</a></li>
				<li><a href="productos/AgregarProducto.php">Productos</a></li>
				<li><a href="#">Bienvenido, <?php echo $_SESSION['nombre']; ?></a>
				<div>

					<ul>
						<li class="titulo"><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
			
				</div>
            </li>
			</ul>
		</nav>
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>
