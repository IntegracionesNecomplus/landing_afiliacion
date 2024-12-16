<?php
    $detallePago = "Landing SPR";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php
       include('theme/head.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="p-3 mb-2 bg-primary text-white" style="text-align: center;">
            <h1 style="font-weight: bold;">LANDING DE AFILIACIÓN - SPR</h1>
        </div>
        <!--h1-- class="text-center">LANDING DE AFILIACIÓN - SPR</!--h1-->
        <hr>
        <h3 class="text-center">Botón de Landing de Afiliación con SPR Niubiz</h3>
        <hr>
        <form method="post" target="_blank" action="https://pagoprogramado.niubiz.com.pe/afiliacion/formulario-afiliacion?" class="text-center">
            <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" value="601716903" class="form-control">
            <input type="submit" value="Suscríbete" class="pago_programado_niubuz">
            <button class="spr_niubiz" onclick="redirigir_a()">SPR</button>
            <button class="manual_desarrolladores" onclick="redirigir()">Documentación</button>
            <button class="repositorio_actualizado" onclick="repositorio()">Demo Actualizada 2025</button>
        </form>
    </div>
 </body>

<script src="assets/js/script.js"></script>
<script>
    // Función para redirigir al usuario
    function redirigir_a() {
        window.open("https://pagoprogramado.niubiz.com.pe/comercio/login", "_blank");
    }

    function redirigir() {
        window.open("https://desarrolladores.niubiz.com.pe/docs/landing-de-afiliaci%C3%B3n-rec", "_blank");
    }

    function repositorio() {
        window.open("https://github.com/IntegracionesNecomplus/landing_afiliacion", "_blank");
    }
</script>
</html>