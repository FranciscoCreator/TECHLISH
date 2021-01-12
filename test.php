<?php $pageTitle = "Techlish|Test"; ?>
<?php include('includes/layout/head.php'); ?>
<?php include('includes/layout/nav.php'); ?>
<section>
     <h1 class="text-center item-test" style="color:#ef7373;">Prepárate para tu exámen</h1>
     <div class="container">
         <p class="text-left text-white">No respondas al azar. Si no sabes la respuesta, puedes dejarla en blanco.
        <p class="text-left text-white"> No necesitas contestar toda la prueba si sientes que has pasado tu nivel.</p>
        
     </div>
     
     <div id="test" class="container"></div>
    <p >
        <div id="resultado" style="background-color:white;color:#ef7373;" class="text-center font-weight-bold"></div>
    </p>
    
    <p class="text-center p-3">
        <button id="boton" class="btn btn-primary">Mostrar resultado</button>
    </p>
    <?php include('includes/sections/formulario-index.php')?>

</section>
   
   

<style>
    body{
        width: 100%;
        height: ;
        /* background-image: url('img/ft-1.jpg') ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed; */
        background: rgb(242,242,242);
background: linear-gradient(90deg, rgba(242,242,242,1) 0%, rgba(187,187,195,1) 0%, rgba(157,158,170,1) 0%, rgba(30,33,61,1) 100%);
    }
    .item-test{
        -webkit-box-shadow: -3px 3px 13px 6px rgba(239,115,115,0.41); 
box-shadow: -3px 3px 13px 6px rgba(239,115,115,0.41);
        padding: 20px;
        background-color:white;
    }
</style>
<script src="js/test.js"></script>
<?php include('includes/sections/footer.php'); ?>
<?php include('includes/layout/foot.php'); ?>