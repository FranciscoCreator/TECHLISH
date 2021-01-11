<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/sections/formulario-index.css">

<section id="contacto" class="mt-10" data-aos="fade-left">
        <div class="contenedor-form">
            <div class="llamanos-contenedor">
                <h2 class="text-white text-center ">Llámanos</h2>
                <p class="text-white text-center "><i class="fas fa-phone-alt"></i> (55)87-88-35-48</p>
            </div>
        <form id="form-send-mail" action="control/send_mail.php" method="post">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-12 col-sm-12 col-md-6"><input type="text" name="apellido" placeholder="Apellido" required></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <input type="email" name="email" placeholder="É-mail" required>
                </div>
                <div class="col col-12 col-sm-12 col-md-6">
                    <input type="tel" name="telefono" placeholder="Teléfono" required>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-12 col-sm-12 col-md-12">
                    <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje:" required></textarea>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col d-flex align-items-center col-12 col-sm-12 col-md-12">
                    <input id="cbx_accept_privacy" type="checkbox">
                    <p class="text-white pl-3" style="font-size: 13px; margin: auto 0px;">He leído el <a class="text-white" style="font-weight: bold;"  href="">aviso de privacidad</a>  y estoy de acuerdo con los términos y condiciones del servicio.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-12 col-sm-12 col-md-6">
                    <select name="programa_select" id="programa-select" style="color: #1e213d;" required>
                            <option selected value>¿Qué programa te interesa?</option>
                            <option value="programa-ingles-general">Programa de  Inglés General</option>
                            <option value="programa-corporativo-">Programa Inglés Corporativo</option>
                            <option value="programa-ingles-tecnico">Programa de Inglés Técnico</option>
                            <option value="programa-ingles-academico">Programa Inglés Academico</option>
                            <option value="programa-ingles-por-area">Programa de Inglés por Área</option>
                            <option value="asesoria-ingles-profesional">Asesoría de Inglés Profesional</option>
                    </select>
                </div>
                <div class="col col-12 col-sm-12 col-md-6">
                    <input type="submit" name="enviar" value="¡Solicitar información!" id="">
                </div>
            </div>
        </form>
    </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>