<?php

$ressource = array(
	'current' => 0,
	'max' => 100,
	'rate' => 0,
);

$ressources_list = array(
	'wood',
	'iron',
	'stone',
);

$ressources = array();
foreach ($ressources_list as $k => $v) {
	array_push($ressources, $ressource);
	$ressources[$k]['name'] = $v;
}

$data = array(
	'ressources' => $ressources,
);


// $array = array(
// 	'ressources' => array(
// 		'wood' => array(
// 			array_merge(
// 				array('name' => 'wood'),
// 				$ressources
// 			),
// 		),
// 	)
// );

echo json_encode($data);

?>