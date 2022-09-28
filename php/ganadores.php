<?php 
    $ruta = '../css';
    require_once('../html/encabezado.html');
?> 
<header>
    <h1>Ganadores de Black jack</h1>
</header>
<main>
    <section>
        <article id="ganadores">
        <?php
                 //Mostrar archivo
                 
                $carpeta = '../txt/';
                $nombre = 'ganadores.txt';
                 $archivo = fopen($carpeta.$nombre,'r'); 
                 while (!feof($archivo)) { //mientras no sea el final del archivo
                     $linea = fgets($archivo); //me lee las lineas
                     $linea = trim($linea); //borra los espacios en blanco, en caso de tenerlos
     
                     if ($linea != '') { 
                     $arrayLinea = explode(';',$linea); //me arma un arreglo con los datos
                     if ($arrayLinea[1] == '21'){
                        echo '<p id="p-ganadores">' .$arrayLinea[0]. '</p>'; // muestros los datos de las lineas con indice 0
                     }
                     } 
                 }
        ?>
        </article>
    </section>
</main>
<?php
    require_once('../html/footer.html');
?>