<?php 
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    switch ($url) {
        case 'localhost/comilon/index.php':
            $current = 'bienvenido';
        break;
        case 'localhost/comilon/view/catalogo.php':
            $current = 'catalogo';
            $url = '../';
        break;
        case 'localhost/comilon/view/menu.php':
            $current = 'menu';
            $url = '../';
        break;
        case 'localhost/comilon/view/pedido.php':
            $current = 'pedido';
            $url = '../';
        break;

        case 'localhost/comilon/view/RegistroCliente.php':
        $current = 'registro';
        $url = '../';
        break;
        
        default:
            echo "Esta siendo manipulado";
        break;
    }
    
?>