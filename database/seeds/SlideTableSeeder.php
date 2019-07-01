<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'pic' => 'bg_1.png',
            'title' => 'THIẾT KẾ ĐA DẠNG',
            'desc' => 'Được thiết kế theo nhiều dòng giày khác nhau nên sự mới mẻ, thoải mái cũng như sự trẻ trung cho người mang nó.',
        ]);

        Slide::create([
            'pic' => 'bg_2.png',
            'title' => 'PHONG CÁCH KHÁC BIỆT',
            'desc' => 'Không chỉ đẹp ở kiểu dáng mà cả về chất liệu, vì đó chính là phương để thợ hành nghề sáng tạo nên những đôi giày da bắt mắt và ấn tượng.',
        ]);

        Slide::create([
            'pic' => '1561865833_bg-3.png',
            'title' => 'Sneaker collection 2019',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
        ]);
    }
}
