<?php
    include_once 'includes/templates/header.php';
?>

    <section class="seccion">
        <div class="contenedor">
            <h2 class="titulo">Personaliza tu asistencia</h2>
            <p class="parrafo">
                Con <span>Conference</span> tienes la posibilidad de elegir el taller, conferencia o seminario de tu preferencia.
                También tines la posibilidad de recibir descuentos en distintos productos.
            </p>
            <h3 class="subtitulo">Elige tu tipo de pase</h3>
            <form action="">
                <div id="paquetes" class="contenedor-precios paquetes">
                    <div class="tabla-precio">
                        <div class="cabecera-tabla">
                            <h3 class="paquete">Pase por 2 días<sub>(V/S)</sub></h3>
                            <h3 class="paquete-precio"><sup>$</sup>200</h3>
                        </div>
                        <p class="beneficio">Souvenir</p>
                        <p class="beneficio">Todas las conferencias</p>
                        <p class="beneficio">Todos los talleres</p>
                        <div class="orden">
                            <label for="pase-dos">Cantidad</label>
                            <input class="input-numero" type="number" min="0" size="3" placeholder="0" id="pase-dos">
                        </div>
                        <span class="boton-comprar">Boleto</span>
                    </div>

                    <div class="tabla-precio">
                        <div class="cabecera-tabla">
                            <h3 class="paquete">Todos los días</h3>
                            <h3 class="paquete-precio"><sup>$</sup>300</h3>
                        </div>
                        <p class="beneficio">Souvenir</p>
                        <p class="beneficio">Todas las conferencias</p>
                        <p class="beneficio">Todos los talleres</p>
                        <div class="orden">
                            <label for="pase-completo">Cantidad</label>
                            <input class="input-numero" type="number" min="0" size="3" placeholder="0" id="pase-completo">
                        </div>
                        <span class="boton-comprar">Boleto</span>
                    </div>

                    <div class="tabla-precio">
                        <div class="cabecera-tabla">
                            <h3 class="paquete">Pase por 1 día<sub>(V)</sub></h3>
                            <h3 class="paquete-precio"><sup>$</sup>150</h3>
                        </div>
                        <p class="beneficio">Souvenir</p>
                        <p class="beneficio">Todas las conferencias</p>
                        <p class="beneficio">Todos los talleres</p>
                        <div class="orden">
                            <label for="pase-uno">Cantidad</label>
                            <input class="input-numero" type="number" min="0" size="3" placeholder="0" id="pase-uno">
                        </div>
                        <span class="boton-comprar">Boleto</span>
                    </div>
                </div> <!-- cierre .contenedor-precios -->

                <h3 class="subtitulo">Elige tus talleres</h3>

                <div id="eventos" class="contenedor-talleres">
                    <h4 class="titulo-dia">Viernes</h4>
                    <div class="contenedor-dia" id="viernes">
                        <div class="taller">
                            <p class="nombre-taller">Talleres</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_01" value="taller_01" disabled><time>10:00</time> Responsive Web Design</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_02" value="taller_02" disabled><time>12:00</time> Flexbox</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_03" value="taller_03" disabled><time>14:00</time> HTML5 y CSS3</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_04" value="taller_04" disabled><time>17:00</time> Drupal</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_05" value="taller_05" disabled><time>19:00</time> WordPress</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Conferencias</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_01" value="conf_01" disabled><time>10:00</time> Como ser Freelancer</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_02" value="conf_02" disabled><time>17:00</time> Tecnologías del Futuro</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_03" value="conf_03" disabled><time>19:00</time> Seguridad en la Web</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Seminarios</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="sem_01" value="sem_01" disabled><time>10:00</time> Diseño UI y UX para móviles</label></li>
                            </ul>
                        </div>
                    </div><!-- cierre .contenedor-dia -->

                    <h4 class="titulo-dia">Sábado</h4>
                    <div class="contenedor-dia" id="sabado">
                        <div class="taller">
                            <p class="nombre-taller">Talleres</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_06" value="taller_06" disabled><time>10:00</time> AngularJS</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_07" value="taller_07" disabled><time>12:00</time> PHP y MySQL</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_08" value="taller_08" disabled><time>14:00</time> JavaScript Avanzado</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_09" value="taller_09" disabled><time>17:00</time> SEO en Google</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_10" value="taller_10" disabled><time>19:00</time> De Photoshop a HTML5 y CSS3</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_11" value="taller_11" disabled><time>21:00</time> PHP Medio y Avanzado</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Conferencias</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_04" value="conf_04" disabled><time>10:00</time> Como crear una tienda online</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_05" value="conf_05" disabled><time>17:00</time> Los mejores lugares para encontrar trabajo</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_06" value="conf_06" disabled><time>19:00</time> Pasos para crear un negocio rentable</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Seminarios</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="sem_02" value="sem_02" disabled><time>10:00</time> Aprende a Programar en una mañana</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="sem_03" value="sem_03" disabled><time>17:00</time> Diseño UI y UX para móviles</label></li>
                            </ul>
                        </div>
                    </div><!-- cierre .contenedor-dia -->

                    <h4 class="titulo-dia">Domingo</h4>
                    <div class="contenedor-dia" id="domingo">
                        <div class="taller">
                            <p class="nombre-taller">Talleres</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_12" value="taller_12" disabled><time>10:00</time> Laravel</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_13" value="taller_13" disabled><time>12:00</time> Crea tu propia API</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_14" value="taller_14" disabled><time>14:00</time> JavaScript y jQuery</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_15" value="taller_15" disabled><time>17:00</time> Creando Plantillas para WordPress</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="taller_16" value="taller_16" disabled><time>19:00</time> Tiendas Virtuales en Magento</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Conferencias</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_07" value="conf_07" disabled><time>10:00</time> Como hacer Marketing en línea</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_08" value="conf_08" disabled><time>17:00</time> ¿Con que lenguaje debo empezar?</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="conf_09" value="conf_09" disabled><time>19:00</time> Frameworks y librerias Open Source</label></li>
                            </ul>
                        </div>
                        <div class="taller">
                            <p class="nombre-taller">Seminarios</p>
                            <ul class="lista-talleres">
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="sem_04" value="sem_04" disabled><time>14:00</time> Creando una App en Android en una tarde</label></li>
                                <li class="lista-check"><label><input class="chk" type="checkbox" name="registro[]" id="sem_05" value="sem_05" disabled><time>17:00</time> Creando una App en iOS en una tarde</label></li>
                            </ul>
                        </div>
                    </div><!-- cierre .contenedor-dia -->
                </div> <!-- cierre .contenedor-talleres -->

                <div id="resumen">
                    <h3 class="subtitulo">Pago y Extras</h3>
                    <div class="contenedor-resumen">
                        <div class="extras">
                            <p class="nombre-taller">Payera del evento <span>$100</span></p>
                            <input class="input-numero" type="number" min="0" placeholder="0" id="camisa-evento">
                            <p class="nombre-taller">USB conmemorativa <span>$150</span></p>
                            <input class="input-numero" type="number" min="0" placeholder="0" id="usb">
                            <div class="botones">
                                <input type="button" class="btn" value="Calcular" id="calcular">
                                <input type="reset" class="btn" value="Limpiar Campos">
                            </div>
                        </div>
                        <div class="total">
                            <p class="nombre-taller">Resumen de Orden</p>
                            <div id="lista-productos">

                            </div>
                            <p class="nombre-taller">Total a pagar</p>
                            <div id="suma-total">

                            </div>
                            <input type="submit" class="btn" value="Pagar" id="btn-registro">
                        </div>
                    </div>
                </div> <!-- cierre #resumen-pago -->

            </form>
        </div> <!-- cierre .contenedor -->
    </section>

    <?php 
        include_once 'includes/templates/footer.php';
    ?>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/jsReservaciones.js"></script>
</body>
</html>