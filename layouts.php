<?php
echo file_get_contents('./views/header.html');

require_once($PAGE['controller']);
if (!is_null($PAGE['handler'])) {
    $PAGE['handler']();
}

echo file_get_contents('./views/footer.html');