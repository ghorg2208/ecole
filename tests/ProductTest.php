<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testAddProduct()
    {
        $product = new Product();
        $result = $product->add('Test Produit', 100.50);
        $this->assertTrue($result);
    }
}
