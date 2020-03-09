<?php
class Mi_Clase {
function __destruct()
{
print " Un objeto de tipo Mi_Clase está siendo
destruido \n";
}
}
$obj = new Mi_Clase();
$obj = NULL;