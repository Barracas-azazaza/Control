<?php
require("DBclass.php");

echo ($_POST['usuario'] . $_POST['pass']);
if( !empty( $_POST['usuario'] ) && !empty( $_POST['pass'] )){
    $_con = mysqli_connect('localhost', 'root', '', 'test');
    if( mysqli_connect_error()) echo "Falló conexión a MySQL: " . mysqli_connect_error();
    else{        
        $usuario = 	$_POST['usuario'];
        $psw = 	$_POST['pass'];
        $query= "SELECT * FROM users WHERE email='$usuario'  and pass='$psw';";
        echo($query);
        $result = mysqli_query($_con, $query);
                $data = mysqli_fetch_assoc($result);
                $count = mysqli_num_rows($result);
                echo('En '.$count);
                mysqli_close($_con);
                if( $count == 1){
                    $_SESSION = $data;
                    $_SESSION['logged_in'] = true;
                    header('Location: Construccion.php');;
                }else{
                    throw new Exception( 'error en sesión' );
                }
    }
}else{
    throw new Exception( 'error en sesión, campos vacios' );
}


?>