<?php
session_start();
session_destroy();
header('Location: index.php');

require_once('html/1-start.html');
require_once('html/4-deco.html');
require_once('html/end.html');