<?php 
 $nome=$_POST['tnome'];
 $email=$_POST['temail'];
 $assunto=$_POST['tassunto'];
 $comentario=$_POST['tcomentario'];
 $msj=$comentario."\nEnviado por: ".$nome."\nEmail: ".$email;
if(mail('nicolastrres@gmail.com',$assunto, $msj)){
    header("location: contato.php?mensaje=true");
}else{
    header("location: contato.php?mensaje=false");
}
?>