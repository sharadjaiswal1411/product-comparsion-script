<?php
 
use Phpscots\ProductSearch\ProductSearch;
 
class ProductSearchTest extends PHPUnit_Framework_TestCase {
 
	  public function testShopkartSayHello()
	  {
	    $productSearch = new ProductSearch;
	    
	    $this->assertEquals('hello',$productSearch->with('flipkart')->index());
	  }
 
}
