<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $contador = 0;
        
        if(isset($_POST['checkPython'])) {
            $contador++;
        }
        
        if(isset($_POST['checkHTML'])) {
            $contador++;
        }
        
        if(isset($_POST['checkJS'])) {
            $contador++;
        }
        if(isset($_POST['checkCSS'])) {
            $contador++;
        }
        if(isset($_POST['checkPhp'])) {
            $contador++;
        }
        if(isset($_POST['checkNodeJs'])) {
            $contador++;
        }
        if(isset($_POST['checkC'])) {
            $contador++;
        }
        
        if(isset($_POST['checkTypeScript'])) {
            $contador++;
        }
        
        // Mandar resultado

        if ($contador >= 6) {
            header("Location: sputnik.php");
            exit;
        } elseif ($contador >= 4) {
            header("Location: artemis.php");
            exit;
        } elseif ($contador >= 2) {
            header("Location: apolo.php");
            exit;
        } else {
            header("Location: f.php");
            exit;
        }
    }
?>