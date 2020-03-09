<?php
require_once("../JavaBridge/java/Java.inc");
$System = java("java.lang.System");
print_r(java_values($System->getProperties()));
