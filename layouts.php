<?php

echo file_get_contents('./views/header.html');

require_once($PAGE);

echo file_get_contents('./views/footer.html');