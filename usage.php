<?php

use Shop\Model\Product;

require "bootstrap.php";

$user = $entityManager->find( 'User', 1 );
$newProductName = "CPU 4GB";

$product = new Product;
$product->setName( $newProductName );

$entityManager->persist( $product );
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
