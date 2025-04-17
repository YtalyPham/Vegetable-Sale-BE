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
        $img='/assets/users/images/featured/feature-';
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
        ];

        DB::table('products')->insert($products);
    }
}
