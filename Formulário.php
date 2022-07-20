<?php
     if (isset($_POST['Musicam'])) {
     	setcookie('Musicam',$_POST['Musicam']);

     }
     
     if (isset($_COOKIE['Musicam'])){
     	echo "Você já respondeu. Não poderá responder novamente. ";
     }else{
     	include 'Formulario.html';
     }

?>
