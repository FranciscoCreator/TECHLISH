<?php $pageTitle = "Techlish|Test"; ?>
<?php include('includes/layout/head.php'); ?>
<?php include('includes/layout/nav.php'); ?>
    <h1 class="text-center item-test" style="color:#ef7373;">Prepárate para tu exámen</h1>
    <div id="test" class="container"></div>
    <p >
        <div id="resultado" style="background-color:white;color:#ef7373;" class="text-center font-weight-bold"></div>
    </p>
    <p class="text-center p-3">
        <button id="boton" class="btn btn-primary">Mostrar resultado</button>
    </p>
    
<style>
    body{
        width: 100%;
        height: 100vh;
        background-image: url('img/portada.jpg') ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed;
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