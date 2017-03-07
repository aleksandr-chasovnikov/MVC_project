<?php

//FrontController

// 1.Îòîáğàæåíèå îøèáîê íà âğåìÿ ğàçğàáîòêè
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Ïîäêëş÷åíèå ôàéëîâ ñèñòåìû
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// 3.Óñòàíîâêà ñîåäèíåíèÿ


// 4. Âûçîâ Router
$router = new Router();
$router->run();