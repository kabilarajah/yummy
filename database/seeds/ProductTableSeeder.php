<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([ ]);

        	
}


'imagepath' => '/images/coffee.jpg',
            'title'     => 'Coffee',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            'price' => 100


            ]);
        $product->save();

         $product = new \App\Product([

            'imagepath' => '/images/coffee.jpg',
            'title'     => 'Coffee',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            'price' => 100


            ]);
        $product->save();

         $product = new \App\Product([

            'imagepath' => '/images/coffee.jpg',
            'title'     => 'Coffee',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            'price' => 100


            ]);
        $product->save();

         $product = new \App\Product([

            'imagepath' => '/images/coffee.jpg',
            'title'     => 'Coffee',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            'price' => 100


            ]);
        $product->save();
    }
    