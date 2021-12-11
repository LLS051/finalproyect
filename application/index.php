<?php 
//controllers 

require_once 'controllers/template.php';
require_once 'controllers/links.php';
require_once 'controllers/user.php';
require_once 'controllers/articles.php';

//models
require_once 'models/links.php';
//require_once 'models/connection.php';
require_once 'models/user.php';
require_once 'models/articles.php';

$insole = new TemplateController();
$insole->template();



?>