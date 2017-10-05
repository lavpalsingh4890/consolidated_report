<?php
// Connect to MySQL

//$link = new mysqli( '172.16.3.203:3317', 'userjs', 'js123456', 'jspc_module_test' );
$link = new mysqli( 'localhost:3306', 'root', 'js123456', 'jspc_module_test' );
if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
$query = "SELECT Result,Count(*) as count FROM jspc_module_test.jsms_testsuite where status ='Done' group by Result";
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