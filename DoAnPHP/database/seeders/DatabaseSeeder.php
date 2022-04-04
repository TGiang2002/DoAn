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
                'title' => 'Absolue collection. The Lancome team has been one…',
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
                'description' => 'Phong cách thời trang đường phố số một thế giới. Là thanh xuân của hàng triệu bạn trẻ. Là "game changing" - kẻ thay đổi cuộc chơi khi biến một dòng giày xưa kia chỉ chuyên dành cho bóng rổ trở thành một biểu tượng thời trang không thể thay thế. Cứ hễ 1s thì CV 1970 bán được 1 đôi CV Chuck 70 trên toàn thế giới. Được xem là đôi giày mà ai-cũng-phải-có. CV Classic là dòng giày bá đạo nhất trong tất cả. .',
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
                'description' => 'Phong cách thời trang đường phố số một thế giới. Là thanh xuân của hàng triệu bạn trẻ. Là "game changing" - kẻ thay đổi cuộc chơi khi biến một dòng giày xưa kia chỉ chuyên dành cho bóng rổ trở thành một biểu tượng thời trang không thể thay thế. Cứ hễ 1s thì CV 1970 bán được 1 đôi CV Chuck 70 trên toàn thế giới. Được xem là đôi giày mà ai-cũng-phải-có. CV Chuck Taylor 1970s là dòng giày bá đạo nhất trong tất cả. .',
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
                'description' => 'Phù hợp cho cả nam nữ. Air Force 1 được xem như một món phụ kiện thời trang khi có thể diện kèm với nhiều loại trang phục trong các dịp khác nhau như đi chơi, đi làm, đi học,... mà vẫn nổi bật',
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
                'description' => 'Prophere chính là cái tên đang được nhắc đến nhiều nhất trên các cộng đồng người chơi giày. Bộ đế và midsole được thiết kế vô cùng đặc biệt chắc chắn sẽ không thể tìm thấy ở bất kì phiên bản nào khác.
Một trong những mẫu giày được thiết kế dành cho tương lai. Phong cách hiện đại, trẻ trung, sống động và vô cùng cá tính. Mang đậm sự kết hợp giữa thời trang đường phố streetwear và thời trang thể thao.
Đệm midsole ấn tượng và không thể lẫn lộn, Ngoài ra, Prophere vẫn giữ những nguyên bản từ Original với các chi tiết góc cạnh mạnh mẽ. Các chi tiết chất liệu da lộn tổng hợp sang trọng và logo 3 sọc 3-Stripes nổi bật từ thương hiệu.',
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
                'description' => 'Air Jordan 1 Retro OG UNC vẫn giữ nguyên dáng vẻ đặc biệt & dễ nhận biết của dòng sản phẩm Air Jordan 1 mà Nike cho ra mắt vào cách đây hơn 30 năm. Với chất liệu da, suede và lưới được may cắt tỉ mỉ và phối hợp khéo léo tinh tế.',
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
                'description' => 'Phong cách thời trang đường phố số một thế giới. Là thanh xuân của hàng triệu bạn trẻ. Là “game changing” – kẻ thay đổi cuộc chơi khi biến một dòng giày xưa kia chỉ chuyên dành cho bóng rổ trở thành một biểu tượng thời trang không thể thay thế.',
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
