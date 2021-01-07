<!-- En esta variable se guarda el titulo de la página actual -->
<?php $pageTitle = "Techlish|Inicio"; ?>
<!-- La cual se recupera en el archivo head.php en el title -->
<?php include('includes/layout/head.php'); ?>
<?php include('includes/layout/nav.php'); ?>
<!-- Aqui se trae la sección head-home que es la del título grandote y la imagen de fondo -->
<!-- Cada archivo php q esta en sections manda llamar a su css -->
<?php include('includes/sections/header-home.php'); ?>


<?php include('includes/sections/mis-trabajos.php'); ?>
<?php include('includes/sections/por-que-trabajar.php'); ?>
<!-- Hay 2 tipos de ola una hacia arriba y otra hacia abajo -->
<!-- En una variable definimos el color (Gris) y a la hora de traer la hola hacia arriba le pasamos el color -->
<?php $colorOla = "#f2f2f2"; ?>
<?php include('includes/layout/ola_up.php'); ?>
<!-- Y así coincide con el color de fondo de la sigiente sección -->
<?php include('includes/sections/programa-por-area.php'); ?>
<!-- Y le ponemos al final una ola hacia abajo pero de diferente color (Azul) ya q así es el fondo del final de la sección-->
<?php $colorOla = "#1e1f3f"; ?>
<?php include('includes/layout/ola_down.php'); ?>



<?php $colorOla = "#f2f2f2"; ?>
<?php include('includes/layout/ola_up.php'); ?>
<?php include('includes/sections/asesoria-ingles.php'); ?>
<?php $colorOla = "#1e1f3f"; ?>
<?php include('includes/layout/ola_down.php'); ?>
<?php $colorOla = "#f2f2f2"; ?>
<?php include('includes/layout/ola_up.php'); ?>
<?php include('includes/sections/otros-idiomas.php'); ?>
<?php $colorOla = "#1e1f3f"; ?>
<?php include('includes/layout/ola_down.php'); ?>
<?php include('includes/sections/preparate-examen.php'); ?>
<?php $colorOla = "#f2f2f2"; ?>
<?php include('includes/layout/ola_up.php'); ?>
<?php include('includes/sections/blog.php'); ?>
<?php include('includes/sections/prueba-ingles.php'); ?>
<?php $colorOla = "#1e1f3f"; ?>
<?php include('includes/layout/ola_down.php'); ?>
<?php $colorOla = "#f2f2f2"; ?>
<?php include('includes/layout/ola_up.php'); ?>
<?php include('includes/sections/servicios.php'); ?>
hvhgv

<?php include('includes/layout/foot.php'); ?>