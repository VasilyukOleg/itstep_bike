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
        $product = new \App\Product([
            'imagePath' => '\img\0ba21fdc-b5cd-42d9-80bd-09d3293b5ee8.jpg',
            'title' => 'Scott Aspect 900 (2019)',
            'description' => 'Размер колеса: 29 ; Количество скоростей: 21; Год выпуска: 2019;',
            'price' => 3041
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\1e0eb384-bcbc-4870-af14-36dee9fa86f5.jpg',
            'title' => 'Royal Baby',
            'description' => 'Размер колеса: 20 ; Количество скоростей: 1; Год выпуска: 2018;',
            'price' => 349
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\02aff576-3c48-48a2-af96-b822bf7e5307.jpg',
            'title' => 'Scott Aspect 930 (2019)',
            'description' => 'Размер колеса: 29; Год выпуска: 2019;',
            'price' => 1733
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\2cc892f4-9fa0-49d0-89e2-05ec0fd9cc55.jpg',
            'title' => 'GT Stomper Prime 24 RED',
            'description' => 'Размер колеса: 24 ; Количество скоростей: 7; Год выпуска: 2019;',
            'price' => 699
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\3bfc7248-d08d-4dff-a00b-734819eca14c.jpg',
            'title' => 'SCOTT CONTESSA JR 24',
            'description' => 'Размер колеса: 24 ; Количество скоростей: 21; Год выпуска: 2019;',
            'price' => 683
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\d23fc8f1-443f-4904-b001-5d8f848d777a.jpg',
            'title' => 'Scott Aspect 740 (2019)',
            'description' => 'Размер колеса: 24 ; Количество скоростей: 21; Год выпуска: 2019;',
            'price' => 683
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\f1450efc-4ac6-43e5-9772-ba2a95b00254.jpg',
            'title' => 'SCOTT CONTESSA JR 24',
            'description' => 'Размер колеса: 27.5; Год выпуска: 2019;',
            'price' => 1529
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\b5739ecb-c683-480e-83c9-19cf94afa0de.jpg',
            'title' => 'SCOTT Roxter 16 (2019)',
            'description' => 'Размер колеса: 16 ; Количество скоростей: 1; Год выпуска: 2019;',
            'price' => 649
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\46bd0c3c-a4ec-4d42-870b-5be7bbf9bb1a.jpg',
            'title' => 'SCOTT CONTESSA 720 WHITE/PEACH',
            'description' => 'Размер колеса: 27.5 ; Количество скоростей: 24; Год выпуска: 2019;',
            'price' => 1080
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '\img\46bd0c3c-a4ec-4d42-870b-5be7bbf9bb1a.jpg',
            'title' => 'GT AVALANCHE ELITE 29',
            'description' => 'Размер колеса: 27.5 ; Количество скоростей: 24; Год выпуска: 2019;',
            'price' => 1399
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => '\img\cea7b1a7-2ae4-42a5-905d-69c9d23b096d.jpg',
            'title' => 'SCOTT Scale 16 (2019)',
            'description' => 'Размер колеса: 27.5 ; Количество скоростей: 24; Год выпуска: 2019;',
            'price' => 799
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => '\img\cc8c08a3-6362-498a-9d76-4bc382a12bbb.jpg',
            'title' => 'Scott Roxter 24 Plus Disc (2019)',
            'description' => 'Размер колеса: 27.5 ; Количество скоростей: 24; Год выпуска: 2019;',
            'price' => 899
        ]);
        $product->save();




    }
}
