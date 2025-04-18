<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desc = 'Example';
        $img='assets/users/images/featured/f';
        $products = [
            [
                'name' => 'Thịt bò nạt',
                'img' => $img.'1.jpg',
                'price' => 20000,
                'inventory' => 20,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 1,
            ],
            [
                'name' => 'Chuối',
                'img' => $img.'2.jpg',
                'price' => 17800,
                'inventory' => 100,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Ổi',
                'img' => $img.'3.jpg',
                'price' => 25000,
                'inventory' => 20,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Dưa hấu',
                'img' => $img.'4.jpg',
                'price' => 44000,
                'inventory' => 220,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Nho tím',
                'img' => $img.'5.jpg',
                'price' => 120000,
                'inventory' => 300,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Hamburger',
                'img' => $img.'6.jpg',
                'price' => 86000,
                'inventory' => 40,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 3,
            ],
            [
                'name' => 'Xoài',
                'img' => $img.'7.jpg',
                'price' => 69000,
                'inventory' => 50,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Táo Úc',
                'img' => $img.'8.jpg',
                'price' => 53000,
                'inventory' => 10,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 2,
            ],
            [
                'name' => 'Sanwich',
                'img' => $img.'9.jpg',
                'price' => 86000,
                'inventory' => 50,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 3,
            ],
            [
                'name' => 'Bắp cải',
                'img' => $img.'13.jpg',
                'price' => 20000,
                'inventory' => 100,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 4,
            ],
            [
                'name' => 'Bí đỏ',
                'img' => $img.'14.jpg',
                'price' => 15000,
                'inventory' => 10,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 4,
            ],
            [
                'name' => 'Nước ép xoài',
                'img' => $img.'10.jpg',
                'price' => 25000,
                'inventory' => 100,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 5,
            ],
            [
                'name' => 'Nước ép Chuối',
                'img' => $img.'11.jpg',
                'price' => 25000,
                'inventory' => 100,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 5,
            ],
            [
                'name' => 'Mực tươi',
                'img' => $img.'12.jpg',
                'price' => 200000,
                'inventory' => 100,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 6,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
