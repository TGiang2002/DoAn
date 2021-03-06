<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'trucgiang',
                'email' => 'giang@gmail.com',
                'password' => Hash::make('123456'),
               
               
            ],
            [
                'id' => 2,
                'name' => 'thuy',
                'email' => 'thuy@gmail.com',
                'password' => Hash::make('123456'),
               
                
            ],
            [
                'id' => 3,
                'name' => 'tran',
                'email' => 'tran@gmail.com',
                'password' => Hash::make('123456'),
                
            ],
            [
                'id' => 4,
                'name' => 'TrucGiang',
                'email' => 'tgiang@gmail.com',
                'password' => Hash::make('123456'),
                
            ],
            [
                'id' => 5,
                'name' => 'XuanThuy',
                'email' => 'xthuy@gmail.com',
                'password' => Hash::make('123456'),
               
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog-2.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog-4.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one???',
                'image' => 'blog-5.jpg',
                'category' => 'MODEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog-6.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Nike',
            ],
            [
                'name' => 'Adidas',
            ],
            [
                'name' => 'Vans',
            ],
            [
                'name' => 'Converse',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'men',
            ],
            [
                'name' => 'Women',
            ],
            [
                'name' => 'Kids',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 4,
                'product_category_id' => 2,
                'name' => 'Converse Classic',
                'description' => 'Phong c??ch th???i trang ???????ng ph??? s??? m???t th??? gi???i. L?? thanh xu??n c???a h??ng tri???u b???n tr???. L?? "game changing" - k??? thay ?????i cu???c ch??i khi bi???n m???t d??ng gi??y x??a kia ch??? chuy??n d??nh cho b??ng r??? tr??? th??nh m???t bi???u t?????ng th???i trang kh??ng th??? thay th???. C??? h??? 1s th?? CV 1970 b??n ???????c 1 ????i CV Chuck 70 tr??n to??n th??? gi???i. ???????c xem l?? ????i gi??y m?? ai-c??ng-ph???i-c??. CV Classic l?? d??ng gi??y b?? ?????o nh???t trong t???t c???. .',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'weight' => 0.5,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 2,
                'brand_id' => 4,
                'product_category_id' => 2,
                'name' => 'Converse Chuck 70',
                'description' => 'Phong c??ch th???i trang ???????ng ph??? s??? m???t th??? gi???i. L?? thanh xu??n c???a h??ng tri???u b???n tr???. L?? "game changing" - k??? thay ?????i cu???c ch??i khi bi???n m???t d??ng gi??y x??a kia ch??? chuy??n d??nh cho b??ng r??? tr??? th??nh m???t bi???u t?????ng th???i trang kh??ng th??? thay th???. C??? h??? 1s th?? CV 1970 b??n ???????c 1 ????i CV Chuck 70 tr??n to??n th??? gi???i. ???????c xem l?? ????i gi??y m?? ai-c??ng-ph???i-c??. CV Chuck Taylor 1970s l?? d??ng gi??y b?? ?????o nh???t trong t???t c???. .',
                'content' => null,
                'price' => 350.99,
                'qty' => 20,
                'discount' => 250.50,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Air Force 1 Low Just Do It',
                'description' => 'Ph?? h???p cho c??? nam n???. Air Force 1 ???????c xem nh?? m???t m??n ph??? ki???n th???i trang khi c?? th??? di???n k??m v???i nhi???u lo???i trang ph???c trong c??c d???p kh??c nhau nh?? ??i ch??i, ??i l??m, ??i h???c,... m?? v???n n???i b???t',
                'content' => null,
                'price' => 350.00,
                'qty' => 20,
                'discount' => 300.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 4,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Adidas Prophere Triple White',
                'description' => 'Prophere ch??nh l?? c??i t??n ??ang ???????c nh???c ?????n nhi???u nh???t tr??n c??c c???ng ?????ng ng?????i ch??i gi??y. B??? ????? v?? midsole ???????c thi???t k??? v?? c??ng ?????c bi???t ch???c ch???n s??? kh??ng th??? t??m th???y ??? b???t k?? phi??n b???n n??o kh??c.
M???t trong nh???ng m???u gi??y ???????c thi???t k??? d??nh cho t????ng lai. Phong c??ch hi???n ?????i, tr??? trung, s???ng ?????ng v?? v?? c??ng c?? t??nh. Mang ?????m s??? k???t h???p gi???a th???i trang ???????ng ph??? streetwear v?? th???i trang th??? thao.
?????m midsole ???n t?????ng v?? kh??ng th??? l???n l???n, Ngo??i ra, Prophere v???n gi??? nh???ng nguy??n b???n t??? Original v???i c??c chi ti???t g??c c???nh m???nh m???. C??c chi ti???t ch???t li???u da l???n t???ng h???p sang tr???ng v?? logo 3 s???c 3-Stripes n???i b???t t??? th????ng hi???u.',
                'content' => null,
                'price' => 640.50,
                'qty' => 20,
                'discount' => 350.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 5,
                'brand_id' => 3,
                'product_category_id' => 3,
                'name' => "Vans Old Skool Classic Black",
                'description' => null,
                'content' => null,
                'price' => 440.00,
                'qty' => 20,
                'discount' => 350.00,
                'weight' => null,
                'sku' => null,
                'featured' => false,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Air Jordan 1 Retro High OG University Blue',
                'description' => 'Air Jordan 1 Retro OG UNC v???n gi??? nguy??n d??ng v??? ?????c bi???t & d??? nh???n bi???t c???a d??ng s???n ph???m Air Jordan 1 m?? Nike cho ra m???t v??o c??ch ????y h??n 30 n??m. V???i ch???t li???u da, suede v?? l?????i ???????c may c???t t??? m??? v?? ph???i h???p kh??o l??o tinh t???.',
                'content' => null,
                'price' => 540.00,
                'qty' => 20,
                'discount' => 340.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 7,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Adidas NMD R1 Triple White',
                'description' => null,
                'content' => null,
                'price' => 640.50,
                'qty' => 20,
                'discount' => 550.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 8,
                'brand_id' => 3,
                'product_category_id' => 1,
                'name' => 'Vans Amber Glow',
                'description' => null,
                'content' => null,
                'price' => 440.00,
                'qty' => 20,
                'discount' => 350.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
            [
                'id' => 9,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Converse Chuck 70 Low Top Sunflower (1970s)',
                'description' => 'Phong c??ch th???i trang ???????ng ph??? s??? m???t th??? gi???i. L?? thanh xu??n c???a h??ng tri???u b???n tr???. L?? ???game changing??? ??? k??? thay ?????i cu???c ch??i khi bi???n m???t d??ng gi??y x??a kia ch??? chuy??n d??nh cho b??ng r??? tr??? th??nh m???t bi???u t?????ng th???i trang kh??ng th??? thay th???.',
                'content' => null,
                'price' => 540.00,
                'qty' => 20,
                'discount' => 340.00,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sneaker',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'products-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'products-2.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'products-3.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'products-4.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'products-5.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'products-6.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'products-7.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'products-8.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'products-9.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'products-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'products-9.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => '35',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => '36',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => '37',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => '38',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => '39',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => '35',
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'tgiang@gmail.com',
                'name' => 'Truc Giang',
                'message' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'xthuy@gmail.com',
                'name' => 'Xuan Thuy',
                'message' => 'Nice !',
                'rating' => 4,
            ],
        ]);
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'trucgiang',
                'email' => 'giang@gmail.com',
                'password' => Hash::make('123456'),
               
               
            ],
            [
                'id' => 2,
                'name' => 'thuy',
                'email' => 'thuy@gmail.com',
                'password' => Hash::make('123456'),
               
                
            ],
            [
                'id' => 3,
                'name' => 'tran',
                'email' => 'tran@gmail.com',
                'password' => Hash::make('123456'),
                
            ],
            [
                'id' => 4,
                'name' => 'TrucGiang',
                'email' => 'tgiang@gmail.com',
                'password' => Hash::make('123456'),
                
            ],
            [
                'id' => 5,
                'name' => 'XuanThuy',
                'email' => 'xthuy@gmail.com',
                'password' => Hash::make('123456'),
               
            ],
        ]);

    }
    
}
