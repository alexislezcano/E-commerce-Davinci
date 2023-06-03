
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/news.css">
    </head>
    <body>

    <!-- FORMULARIO -->
    <div class="container">
        <div class="contact__wrapper bg-dark text-light shadow-lg">
            <div class="row"> 
                
                <div class="col-lg-5 p-5 order-lg-2">
                    <div class="margin">
                        <h1 class="color--white text-center mb-5">Suscríbete a nuestro News Letter</h1>
                        <img src="img/somos/letter.jpg" width="200" alt="imagen de emprendedores" class="rounded" id="letter">
                    </div>
                
                
                </div>
        
                <div class="col-lg-7 contact-form__wrapper padd order-lg-1">
                    <form action="#" class="contact-form form-validate" novalidate="novalidate" action="recibir.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="firstName">Nombre</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Tu nombre">
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Tu apellido">
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="tuemail@gmail.com">
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="telefono">Número de telefono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número">
                                </div>
                            </div>
        
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="mensaje">¿Cómo podemos ayudarte?</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Dejanos un comentario.."></textarea>
                                </div>
                            </div>
        
                            <div class="col-sm-12 mb-3">
                                <button type="enviar" name="enviar" class="text-light" id="estilo-b">ENVIAR</button>
                            </div>
        
                        </div>
                    </form>
                </div>
        
            </div>
        </div>
    </div>