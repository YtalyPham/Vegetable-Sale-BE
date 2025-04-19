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
        $desc = '<ul>
                <p>
                <br />
                <strong>Lợi ích của rau củ</strong>
                </p>
                    <li>Rau củ chứa rất nhiều vitamin và chất dinh dưỡng nên mang đến rất nhiều lợi ích cho sức khỏe con người.</li>
                    <li>Hỗ trợ giảm cân.</li>
                    <li>Giảm nguy cơ mắc các bệnh về tim mạch, béo phì và cả ung thư.</li>
                    <li>Tăng cường sức đề kháng của cơ thể.</li>
                    <li>Cải thiện thị lực.</li>
                    <li>Điều hòa đường huyết.</li>
                    <li>Giảm cholesterol trong máu.</li>
                    <li>Điều hòa huyết áp.</li>
                </ul>

            
                <ul>
                <p>
                <br />
                <strong>Cách chọn rau củ tươi ngon</strong>
                </p>
                    <li>Dựa vào hình dáng bên ngoài: Nên ưu tiên chọn các loại rau củ có phần vỏ không có các vết sâu, cuống lá không bị nhũn, thâm đen. Tránh chọn những loại quả có vỏ ngoài to trơn, căng lớn, bởi đây có thể là những quả đã bị tiêm thuốc, không an toàn cho sức khỏe.</li>
                    <li>Dựa vào màu sắc: Màu sắc của các loại rau củ thường tươi mới, không có các vết xước, héo hay quá đậm màu. Các loại củ có màu quá xanh hoặc quá bóng sẽ không hẳn là an toàn cho sức khỏe người dùng.</li>
                    <li>Dựa vào mùi hương: Mùi hương tự nhiên của các loại rau củ sẽ là mùi đặc trưng theo từng loại chứ không phải là mùi hắc, nồng khó chịu. Nếu các loại củ bạn đang chọn có mùi hóa chất hãy ngừng sử dụng ngay.</li>
                    <li>Dựa vào cảm nhận khi cầm: Những loại củ quả cầm chắc tay, kích thước vừa phải, không quá to sẽ thường ngon hơn những loại to lớn nhưng khối lượng nhẹ. Một số loại rau củ bạn chỉ nên chọn những quả nhỏ, đều tay sẽ ngon hơn.</li>
                </ul>';
        $img = 'assets/users/images/featured/f';
        $products = [
            [
                'name' => 'Thịt bò nạt',
                'img' => $img . '1.jpg',
                'price' => 200000,
                'inventory' => 20,
                'description' => $desc,
                'sort_description' => "Healthy Shop là một hệ thống cửa hàng bán đồ fresh nhập khẩu từ Mỹ, Úc, New Zealand, Canada, Nhật Bản, Hàn Quốc và một số nước khác. Chúng tôi chuyên cung cấp các sản phẩm thực phẩm tươi sống như thịt bò, thịt heo, hải sản và rau củ quả.",
                'facebook' => 'face',
                'linkedin' => 'lnk',
                'category_id' => 1,
            ],
            [
                'name' => 'Chuối',
                'img' => $img . '2.jpg',
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
                'img' => $img . '3.jpg',
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
                'img' => $img . '4.jpg',
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
                'img' => $img . '5.jpg',
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
                'img' => $img . '6.jpg',
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
                'img' => $img . '7.jpg',
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
                'img' => $img . '8.jpg',
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
                'img' => $img . '9.jpg',
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
                'img' => $img . '13.jpg',
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
                'img' => $img . '14.jpg',
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
                'img' => $img . '10.jpg',
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
                'img' => $img . '11.jpg',
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
                'img' => $img . '12.jpg',
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
