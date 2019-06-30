<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pro = new Product();
        $pro->category_id = '1';
        $pro->name = 'ADIDAS EQT SUPPORT 93/17';
        $pro->slug = 'adidas-eqt-support-93-17';
        $pro->pic = 'EQT_Support_93_17_Shoes_Black_CQ5.png';
        $pro->spec = '<table cellpadding="5px" cellspacing="0" class="tbl-product-attribute-specs" width="100%" border="1"> <tbody> <tr> <th>Quy cách sản phẩm</th> <td>Hộp</td> </tr> <tr> <th>Xuất xứ thương hiệu</th> <td>Đức</td> </tr> <tr> <th>Nơi Sản Xuất</th> <td>Trung Quốc</td> </tr> <tr> <th>Bảo hành</th> <td>6 months</td> </tr> </tbody></table>';
        $pro->desc = '<div itemprop="description"> <p><strong>Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) </strong>thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.</p> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ7.png " alt="" width="60%"></p> <p><strong>Đặc điểm nổi bật:</strong></p> <ul> <li>Sản phẩm là hàng chính hãng.</li> <li>EQT Support 93/17 được coi là tinh hoa của adidas, tích hợp đầy đủ công nghệ của quá khứ lẫn tương lai.</li> <li>Khi sở hữu một trong những đôi giày EQT, bạn đã có được câu chuyện 27 năm lao động sáng tạo của những con người luôn muốn mang tới những trải nghiệm tốt nhất bằng slogan "Những gì thiết yếu nhất, không gì là thừa thãi" (Everything that is essential, nothing that is not).</li> <li>EQT support 93/17 là dòng giày được tích hợp những công nghệ hiện đại nhất của adidas.</li> <li>Một trong những điểm sáng tạo ở Adidas là thương hiệu này luôn thay thế những công nghệ giày hiện đại lên các thiết kế cổ điển thay vì chỉ là tung ra các phiên bản giày retro như những thương hiệu khác thường làm. </li> <li>Với adidas EQT, chính bạn là người tạo ra xu hướng và phong cách độc đáo cho riêng mình.</li> <li>Sự tối giản trong thiết kế, màu sắc độc đáo - người mang adidas EQT sẽ tự tạo ra phong cách cho riêng mình, trụ vững, nổi bật trong dòng chảy luôn có xu hướng quay vòng và đào thải của thời trang.</li> </ul> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ6.png " alt="" width="60%"></p> <p><strong>Hướng dẫn chọn size:</strong></p> <p> <img src="uploads/Screen Shot 2018-08-24 at 12.14.02.png "alt="" width="60%"></p> </div>';
        $pro->short_desc = 'Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.';
        $pro->price = '2300000';
        $pro->save();

        $pro = new Product();
        $pro->category_id = '1';
        $pro->name = 'NIKE AIR MAX 270 "JUST DO IT"';
        $pro->slug = 'nike-air-max-270';
        $pro->pic = 'nike-air-max-270.jpg';
        $pro->spec = '';
        $pro->desc = '';
        $pro->price = '2300000';
        $pro->save();

        $pro = new Product();
        $pro->category_id = '2';
        $pro->name = 'ADIDAS ULTRABOOST 4.0';
        $pro->slug = 'adidas-ultraboost-4-0';
        $pro->pic = '1561799915_adidas-ultraboost-4-0.png';
        $pro->spec = '';
        $pro->desc = '';
        $pro->price = '3300000';
        $pro->save();

        

    }
}
