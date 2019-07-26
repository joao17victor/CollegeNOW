
<?php

    if (isset($_POST['nome']) && isset($_POST['email']) &&
    !empty($_POST['nome'])){

 
        $nome = addcslashes($_POST['nome']);
        $email = addcslashes($_POST['email']);

        echo "nome".$nome."<br>";
        echo "Email".$email."<br>";
}
        

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" >
        <imput type="text" name="nome" placeholder="informe seu nome:"/>
        <imput type="email" name="Email" placeholder="informe seu email:"/>
        <imput type="submit" value="Enviar"/>
    </form>
</body>
</html>

