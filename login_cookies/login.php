<?php
    if (!isset($_COOKIE["usuario"])){

        require("formulario_login.php");

        if (isset($_POST["enviar"]) && $_POST["usuario"] != "" && $_POST["password"] != ""){
            try {
                $base=new PDO("mysql:host=localhost; dbname=countries","root","");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $base->exec("SET CHARACTER SET utf8");
                $sql="INSERT INTO 'usuarios' ('USUARIO', 'PASSWORD') VALUES (:login, :password)";
                // $sql="SELECT * FROM usuarios WHERE usuario=:login AND password=:password";
                $resul=$base->prepare($sql);
                $login=htmlentities(addslashes($_POST["usuario"]));
                $password=htmlentities(addslashes($_POST["password"]));
                $resul->bindValue(":login",$login);
                $resul->bindValue(":password",$password);
                $resul->execute();
                $encontro=$resul->rowCount() > 0;
                if ($encontro){
                    echo "usuario encontrado";
                }else{
                    echo "Usuario no existe. Desea Registrarse ?";
                    // echo `<input type='buttom'> `;
                    // $resul=$base->prepare($sql_add);
                    // $resul->execute(array(":login"=>$login,":password"=>$password));
                    // $resul->bindValue(":login",$login);
                    // $resul->bindValue(":password",$password);
                    // $resul->execute();
                    echo '<br>Executed';
                    echo $resul;
                }

            } catch (Exception $e) {
                die("Error al conextarse a la base de datos con MySQL ->" . $e->getMessage());
            }
        }else {

        }
    }
?>
