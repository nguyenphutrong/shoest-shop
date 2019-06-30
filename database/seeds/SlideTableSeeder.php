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
        $pro = new Slide();        
        $pro->pic = 'bg_1.png';
        $pro->title = 'THIẾT KẾ ĐA DẠNG';
        $pro->desc = 'Được thiết kế theo nhiều dòng giày khác nhau nên sự mới mẻ, thoải mái cũng như sự trẻ trung cho người mang nó.';
        $pro->save();

        $pro = new Slide();        
        $pro->pic = 'bg_2.png';
        $pro->title = 'PHONG CÁCH KHÁC BIỆT';
        $pro->desc = 'Không chỉ đẹp ở kiểu dáng mà cả về chất liệu, vì đó chính là phương để thợ hành nghề sáng tạo nên những đôi giày da bắt mắt và ấn tượng.';
        $pro->save();
    }
}
