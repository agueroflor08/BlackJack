<?php
    $ruta = 'css';
    require_once('html/encabezado.html');
?>
<main>
    <section>
        <article>
            <form action="php/juego.php" method="post">
                <fieldset>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre">
                </fieldset>
                
                <input id="boton" type="submit" value="Jugar">
            </form>
            <p class="enlace"><a href="php/ganadores.php">Ganadores Black Jack</a></p>
        </article>
    </section>
</main>
<?php
    require_once('html/footer.html');
?>