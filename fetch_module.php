<?php
// Connect to MySQL

$link = new mysqli( 'localhost:3306', 'root', 'js123456', 'jspc_module_test' );
if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
$query = "SELECT  p.Module_Name, ifnull(p.count,0) as Total,ifnull(p.pass,0) as Pass ,ifnull(p.fail,0) as Fail,ifnull(q.na,0) as NA FROM
(SELECT  x.Module_Name, x.count, x.pass,y.fail FROM

(SELECT  a.Module_Name, a.count, b.pass FROM

  (select  Module_Name,ifnull(count(*),0) as count FROM jspc_module_test.jsms_testsuite where  status ='Done'  group by Module_Name) AS a
 LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as pass FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='Pass' group by Module_Name) AS b
ON a.Module_Name = b.Module_Name) AS x
LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as fail FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='Fail' group by Module_Name) AS y

ON x.Module_Name = y.Module_Name) AS p
LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as na FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='NA' group by Module_Name) AS q
 ON p.Module_Name = q.Module_Name";

/*
SELECT  p.Module_Name, ifnull(p.count,0) as Total,ifnull(p.pass,0) as Pass ,ifnull(p.fail,0) as Fail,ifnull(q.na,0) as NA FROM
(SELECT  x.Module_Name, x.count, x.pass,y.fail FROM

(SELECT  a.Module_Name, a.count, b.pass FROM

  (select  Module_Name,ifnull(count(*),0) as count FROM jspc_module_test.jsms_testsuite where  status ='Done'  group by Module_Name) AS a
 LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as pass FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='Pass' group by Module_Name) AS b
ON a.Module_Name = b.Module_Name) AS x
LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as fail FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='Fail' group by Module_Name) AS y

ON x.Module_Name = y.Module_Name) AS p
LEFT JOIN
  (SELECT Module_Name ,ifnull(count(*),0) as na FROM jspc_module_test.jsms_testsuite  where  status ='Done' and Result ='NA' group by Module_Name) AS q
 ON p.Module_Name = q.Module_Name;
 */
$result = $link->query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

header( 'Content-Type: application/json' );

// Print out rows
$data = array();
while ( $row = $result->fetch_assoc() ) {
  $data[] = $row;
}
echo json_encode( $data );

// Close the connection
mysqli_close($link);
?>