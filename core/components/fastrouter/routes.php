<?php
/** @var FastRoute\RouteCollector $r */

$r->addRoute('GET', '/fastrouter/{name}/{id:[0-9]+}', '1');
$r->addRoute('GET', '/fastrouter/{id:[0-9]+}', '1');
$r->addRoute('GET', '/hello/{name}', '1');
$r->addRoute('GET', '/some_snipper', 'snippet_name');
