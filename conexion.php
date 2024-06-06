<?php
$usuario = $_POST['us'];
$contraseña = $_POST['con'];

if ($usuario == 'lcp' && $contraseña == 123) {
    echo '<script>
            alert("Bienvenido a Liceo canadiense petapa");
            window.location.href = "pag1.html";
          </script>';
} else {
    echo '<script>
            alert("Usuario o contraseña inválidos");
            window.location.href = "index.html";
          </script>';
}
?>
