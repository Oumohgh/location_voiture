<?php
spl_autoload_register(function ($class) {
// chemins possibles selon ton architecture
$paths = [
__DIR__ . "/classes/" . $class . ".php",
__DIR__ . "/interfaces/" . $class . ".php",
__DIR__ . "/enums/" . $class . ".php"
];
});
foreach ($paths as $file) {
if (file_exists($file)) {
require_once $file;
return;
}
}