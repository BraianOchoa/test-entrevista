<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Entrevista</title>
    <meta name="country" content="Argentina" />
    <meta name="geo.country" content="AR" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="google" content="notranslate" />

    <meta name="revisit" content="7 days" />
    <meta name="revisit-after" content="7 days" />

    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">
    <link href="/assets/css/welcome-contact.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
        <div class="text text-center">
            <img src="/assets/images/logo-main.png" alt="" />
            <div class="clear"></div>
            <h2><?php echo $TitleForm;?></h2>
        </div>
    </div>
    <div class="content">
        <div class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-12 order-xl-2 order-lg-2 order-1">
                        <div id="error-messages" class="error-messages"></div>
                        <div class="form">
                            <h3>Consultas Online</h3>
                            <p>Envíe su consulta y un asesor se pondrá en contacto con usted.</p>
                            <form role="form" id="contactoForm" name="contactoForm" action="" method="POST">
                                <label for="name">Nombre y Apellido</label>
                                <input type="text" name="c_fullname" id="c_fullname" />
                                <label for="name">Correo Electrónico</label>
                                <input type="text" name="c_email" id="c_email" />
                                <label for="name">Celular</label>
                                <input type="text" name="c_telephone" id="c_telephone" />
                                <label for="name">Consulta</label>
                                <textarea rows="5" name="c_comments" id="c_comments"></textarea>
                                <input type="hidden" name="is_ask" value="0" />
                                <button type="submit" class="btn btnSubmit">Enviar</button>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="legal">
        <p>Test Entrevista</p>
        <div class="clear"></div>
    </div>
    <script type="text/javascript" src="/assets/js/welcome-contact.js"></script>
</body>

</html>
