<?php
    $ruta = '../css';
    require_once('../html/encabezado.html');
?>
     <header>
        <h1>Black Jack</h1>
    </header>
    <main>
        <section>
            <article class="juego">
                <?php
    if (!empty($_POST['nombre']))
    {
        $jugador = trim($_POST['nombre']);
        //variables
    $naipe1 = mt_rand(1,13);
    $naipe2 = mt_rand(1,13);
    $naipe3 = mt_rand(1,13);

            switch($naipe1){
                case 11:
                    $nombre1 = 'J (sota)';
                    $puntos1 = 10;
                    break;
                case 12:
                    $nombre1 = 'Q (reina)';
                    $puntos1 = 10;
                    break;
                case 13:
                    $nombre1 = 'K (rey)';
                    $puntos1 = 10;
                    break;
                case 1:
                    $nombre1 = 'A';
                    $puntos1 = 1;
                    break;
                default:
                    $nombre1 = $naipe1;
                    $puntos1 = $naipe1;
            }
            switch($naipe2){
                case 11:
                    $nombre2 = 'J (sota)';
                    $puntos2 = 10;
                    break;
                case 12:
                    $nombre2 = 'Q (reina)';
                    $puntos2 = 10;
                    break;
                case 13:
                    $nombre2 = 'K (rey)';
                    $puntos2 = 10;
                    break;
                case  1:
                    $nombre2 = 'A';
                    $puntos2 = 1;
                    break;
                default:
                    $nombre2 = $naipe2;
                    $puntos2 = $naipe2;
            }
            switch($naipe3){
                case 11:
                    $nombre3 = 'J (sota)';
                    $puntos3 = 10;
                    break;
                case 12:
                    $nombre3 = 'Q (reina)';
                    $puntos3 = 10;
                    break;
                case 13:
                    $nombre3 = 'K (rey)';
                    $puntos3 = 10;
                    break;
                case  1:
                    $nombre3 = 'A';
                    $puntos3 = 1;
                    break;
                default:
                    $nombre3 = $naipe3;
                    $puntos3 = $naipe3;
            }
            echo '<p class="jugador">Jugador: ' .$jugador. '</p>';
            echo '<br><p> Naipe 1: <strong>' .$nombre1. '</strong></p><br>';
            echo '<p> Naipe 2: <strong>' .$nombre2. '</strong></p><br>';
            echo '<p> Naipe 3: <strong>' .$nombre3. '</strong></p><br>';

            $suma = $puntos1 + $puntos2 + $puntos3;
            
            if ($suma == 21){
                echo '<h2> GANADOR!! </h2>';
 
            } else {
                echo '<p> PUNTOS OBTENIDOS: <strong>' .$suma. '</strong></p>';
            }
            $linea = $jugador. ';' .$suma; //me junta los datos que vienen del formulario
            $carpeta = '../txt/';
            if (!file_exists($carpeta)) { //si no existe la carpeta me la crea
                mkdir($carpeta);
            } 
            $nombre = 'ganadores.txt';
            $archivo = fopen($carpeta.$nombre,'a'); /*quiero abrir el archivo
                                                    para escritura desde el final
                                                    y si no existe me lo crea*/
            fputs($archivo, $linea . PHP_EOL); //agrega lineas al archivo
            fclose($archivo); //cierro el archivo

           
    } else {
        echo '<p> No se ingresaron datos </p>';
    }
?>
            </article>
        </section>
    </main>
<?php
    require_once('../html/footer.html');
?>

