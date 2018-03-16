<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;

class ProductCRUDTest extends TestCase
{
    use DatabaseMigrations;

    /**----------------------------------------------TESTING STORE METHOD------------------------------------------ */
    public function test_store()
    {
        factory(Product::class,4)->create();
        //Get the actual total amount of rows 
        $beforeCreate = Product::totalrows();
        //call the method post of the route /admin/product/edit   
        $responseCreate = $this->call('POST', '/product/product', ['name'=>'productName', 'code'=>'0456789123', 'buyPrice'=>'12', 'sellPrice'=>'25']);  
        //Get the actual total amount of rows 
        $afterCreate = Product::totalrows();
        //check info
        $testResponse=Product::named('productName')->get();
        //test using assertion, compare info with clue
        $this->assertEquals('productName',$testResponse->first()->name);
        //check if we receive the $product variable from the controller
        $this->assertGreaterThan($beforeCreate, $afterCreate);
    }

    /**----------------------------------------------TESTING UPDATE METHOD------------------------------------------ */
    public function test_update()
    {     
        //Create fake info to feed the DB with an element to update   
        factory(Product::class,4)->create();
        $testUpdate = factory(Product::class)->create(['name'=>'testNamed', 'code'=>'0357159456', 'buyPrice'=>'12', 'sellPrice'=>'25']);
        //Launch the update method 
        $response = $this->call('PATCH', '/product/product/'.$testUpdate->id, ['name'=>'testNameUpdated', 'code'=>'1591591590', 'buyPrice'=>'12', 'sellPrice'=>'25']);   
        //get info from the same id record
        $testUpdated = Product::ided($testUpdate->id)->get();
        //check if we receive updated name and code with the same id
        //$this->assertEquals('testNameUpdated',$testUpdated->first()->name);
        $this->assertEquals('1591591590',$testUpdated->first()->code);
    }

    /**----------------------------------------------TESTING DESTROY METHOD------------------------------------------ */
    public function test_destroy()
    {   
        //Create fake info to feed the DB with an element to delete
        factory(Product::class,4)->create();
        $testDestroy = factory(Product::class)->create(['name'=>'testName', 'code'=>'testCode', 'buyPrice'=>'12', 'sellPrice'=>'25']);
        //Get the actual total amount of rows 
        $before = Product::totalrows();
        //call the method post of the route /admin/product/edit   
        $response = $this->call('DELETE', '/product/product/'.$testDestroy->id);  
        //Get the actual total amount of rows 
        $after = Product::totalrows();
        //check if we receive the $product variable from the controller
        $this->assertGreaterThan($after, $before);
    }

}
