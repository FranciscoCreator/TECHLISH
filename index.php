<?php $pageTitle = "Techlish|Inicio"; ?>
<?php include('includes/layout/head.php'); ?>
<?php include('includes/sections/header-home.php'); ?>
<?php include('includes/sections/mis-trabajos.php'); ?>
<?php $colorOla = "#1E213D"; ?>
<?php include('includes/layout/ola.php'); ?>

<section id="por-que-trabajar">
    <div class="contenedor">
        <h3 class="titulo-section">¿Por que Somos la mejor Opción?</h3>
    </div>
    <div class="contaner">
        <div class="row">
            <div class="col-md-4 por-que-trabajar-item">
                <center>
                    <img src="./img/charla.png" alt="./img/charla.png">
                </center>
                <br>
                <h3 class="text-center">No te quedes Incomunicado</h3>
                <p>
                    No importa en qué parte del mundo te encuentres, 
                    el inglés te permitirá comunicarte con la mitad de la 
                    población del planeta de forma efectiva: visita sitios web, 
                    lee la prensa, conoce otras culturas, escucha noticias, 
                    viaja, accede a programas de estudio internacionales y 
                    cursos especializados, disfruta de la música y el cine, 
                    usa nuevas tecnologías, haz negocios y mejora tu perspectiva 
                    profesional.
                </p>
            </div>
            <div class="col-md-4 por-que-trabajar-item">
                <center>
                    <img src="./img/metas.png" alt="./img/metas.png">
                </center>
                <br>
                <h3 class="text-center">Alcanza tus Metas</h3>
                <p>
                Desempéñate con seguridad en el mundo empresarial. 
                Cierra negocios, haz presentaciones, llamadas y entrevistas exitosas. 
                Eleva tu autoestima y reduce tu nivel de estrés.Permítete viajar y 
                conocer otras culturas.
                </p>
            </div>
            <div class="col-md-4 por-que-trabajar-item">
                <center>
                    <img src="./img/objetivo.png" alt="./img/objetivo.png">
                </center>
                <br>
                <h3 class="text-center">Mejora  Profesionalmente</h3>
                <p>
                    90% de las vacantes de trabajo en puestos medios y directivos exigen el inglés como requisito indispensable.
                    88% de los cursos de especialización requieren fluidez en inglés.
                    El inglés aumenta 44% tu posibilidad de ser contratado.
                    Aumenta 20% la rapidez de promoción dentro de tu empresa.
                    Aumenta 18% la posibilidad de obtener un aumento salarial.
                </p>
            </div>
        </div>
    </div>
</section>


<style>
    .por-que-trabajar-item{
        padding:20px;
    }
    .por-que-trabajar-item h3{
        font-weight: bold;
    }
    .por-que-trabajar-item p{
        line-height: 31px;
        color: #67a7e7;
        font-size: 14px;
        text-align: justify;
        padding: 10px;
    }
</style>

<?php include('includes/layout/foot.php'); ?>