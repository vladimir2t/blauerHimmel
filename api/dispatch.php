<?php
require_once 'lib/peej-tonic/lib/tonic.php';
require_once 'lib/resources/point.php';



$request = new Request(array(
	'baseUri' => '/blauerHimmel/api'
));
$resource = $request->loadResource();
$response = $resource->exec($request);
$response->output();



?>
