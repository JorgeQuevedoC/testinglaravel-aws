<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Product;

class ProductRouteTest extends TestCase
{
    use DatabaseMigrations;
    
    /**------------------------------------------ INDEX ROUTE ----------------------------------------*/
    public function testProductIndexRoute()
    {

                //test using assertion to see that the view received is the expected
        $response = $this->call('GET', '/product/product/');

        $this->assertEquals(200, $response->status());
    }

    /**------------------------------------------ CREATE ROUTE ----------------------------------------*/
     public function testProductCreateRoute()
     {
         $response = $this->call('GET','/product/product/create');
 
         $this->assertEquals(200, $response->status());
     }


    /**------------------------------------------ EDIT ROUTE ----------------------------------------*/
    public function testProductEditRoute()
    {
        $testID = factory(Product::class)->create(['name'=>'testName']);
                //test using assertion to see that the view received is the expected
        $response = $this->call('GET','/product/product/'.$testID->id.'/edit');

        $this->visit('/product/product/'.$testID->id.'/edit')->see($testID->name);
        $this->assertEquals(200, $response->status());
    }

    /**------------------------------------------ READ ROUTE ----------------------------------------*/
    public function testProductReadRoute()
    {
        $testID = factory(Product::class)->create(['name'=>'testName']);
                //test using assertion to see that the view received is the expected
        $response = $this->call('GET','/product/product/'.$testID->id);

        $this->visit('/product/product/'.$testID->id)->see($testID->name);
        $this->assertEquals(200, $response->status());
    }

}
