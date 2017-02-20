<?php

$data['nodes']=array();		
$data['links']=array();		
$data['nodeSet']=array();

$temp_node['id']=0;
$temp_node['name']="12K-1";
$temp_node['x']=410;
$temp_node['y']=100;
array_push($data['nodes'],$temp_node);

$temp_node['id']=1;
$temp_node['name']="12K-2";
$temp_node['x']=410;
$temp_node['y']=280;
array_push($data['nodes'],$temp_node);

$temp_node['id']=2;
$temp_node['name']="Of-9k-03";
$temp_node['x']=660;
$temp_node['y']=280;
array_push($data['nodes'],$temp_node);

$temp_node['id']=3;
$temp_node['name']="Of-9k-02";
$temp_node['x']=660;
$temp_node['y']=100;
array_push($data['nodes'],$temp_node);

$temp_node['id']=4;
$temp_node['name']="Of-9k-01";
$temp_node['x']=180;
$temp_node['y']=190;
array_push($data['nodes'],$temp_node);

$temp_nodeSet['id']=5;
$temp_nodeSet['nodes']=[0,1];
$temp_nodeSet['name']="Group 1";
$temp_nodeSet['root']=0;
$temp_nodeSet['y']=190;
$temp_nodeSet['x']=410;

array_push($data['nodeSet'],$temp_nodeSet);






$temp_link=array("source" => 0,"target" => 1 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 1,"target" => 2 );
array_push($data['links'],$temp_link);


$temp_link=array("source" => 1,"target" => 3 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 4,"target" => 1 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 2,"target" => 3 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 2,"target" => 0 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 3,"target" => 0 );
array_push($data['links'],$temp_link);

$temp_link=array("source" => 0,"target" => 4 );
array_push($data['links'],$temp_link);

  
echo json_encode($data);
?>