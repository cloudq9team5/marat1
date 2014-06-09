<?php
$m = new MongoClient( 'mongodb://localhost:8001');
$cursor = $m->tem->users->find( array( 'name' => 'marat'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>