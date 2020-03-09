<?php
include 'session.inc.php';
function check_auth() { return 4; }
?>
<html>
<head><title>Iniciar Sesión</title></head>
<body>
<?php
//if (isset ($_POST['login']) && ($_POST['login'] == 'Log in') &&($uid = check_auth($_POST['email'], $_POST['password'])))
if (isset ($_GET['login']) && ($_GET['login'] == 'ax'))
{
    $uid = check_auth();
    echo "login success:$uid";
/* El usuario inició sesión correctamente, configurando la
cookie */
$_SESSION['uid'] = $uid;
header('Location: /ax/ex791-index.php');
} else {
?>
/* Formulario HTML viene aquí */
<?php
}
?>
</body>
</html>
