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
        $product = new \App\Models\products([
            'image' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'small-description' => 'Super cool - at least as a child.',
            'price' => 10,

        ]);
        $product->save();

        $product = new \App\Models\products([
            'image' => 'http://www.revelationz.net/images/book/gameofthrones3.jpg',
            'title' => 'A Song of Ice and Fire - A Storm of Swords',
            'small-description' => 'No one is going to survive!',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Models\products([
            'image' => 'http://d.gr-assets.com/books/1411114164l/33.jpg',
            'title' => 'Lord of the Rings',
            'small-description' => 'I found the movies to be better ...',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Models\products([
            'image' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'title' => 'A Song of Ice and Fire - Game of Thrones',
            'small-description' => 'No one is going to survive!',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Models\products([
            'image' => 'http://www.georgerrmartin.com/wp-content/uploads/2012/08/feastforcrows.jpg',
            'title' => 'A Song of Ice and Fire - A Feast for Crows',
            'small-description' => 'Still, no one is going to survive!',
            'price' => 20
        ]);
        $product->save();
    }
}
