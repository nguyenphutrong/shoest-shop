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
        Product::create([
            'category_id' => '1',
            'name' => 'ADIDAS EQT SUPPORT 93/17',
            'slug' => 'adidas-eqt-support-93-17',
            'pic' => 'EQT_Support_93_17_Shoes_Black_CQ5.png',
            'spec' => '<table cellpadding="5px" cellspacing="0" class="tbl-product-attribute-specs" width="100%" border="1"> <tbody> <tr> <th>Quy cách sản phẩm</th> <td>Hộp</td> </tr> <tr> <th>Xuất xứ thương hiệu</th> <td>Đức</td> </tr> <tr> <th>Nơi Sản Xuất</th> <td>Trung Quốc</td> </tr> <tr> <th>Bảo hành</th> <td>6 months</td> </tr> </tbody></table>',
            'short_desc' => 'Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.',
            'desc' => '<div itemprop="description"> <p><strong>Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) </strong>thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.</p> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ7.png " alt="" width="60%"></p> <p><strong>Đặc điểm nổi bật:</strong></p> <ul> <li>Sản phẩm là hàng chính hãng.</li> <li>EQT Support 93/17 được coi là tinh hoa của adidas, tích hợp đầy đủ công nghệ của quá khứ lẫn tương lai.</li> <li>Khi sở hữu một trong những đôi giày EQT, bạn đã có được câu chuyện 27 năm lao động sáng tạo của những con người luôn muốn mang tới những trải nghiệm tốt nhất bằng slogan "Những gì thiết yếu nhất, không gì là thừa thãi" (Everything that is essential, nothing that is not).</li> <li>EQT support 93/17 là dòng giày được tích hợp những công nghệ hiện đại nhất của adidas.</li> <li>Một trong những điểm sáng tạo ở Adidas là thương hiệu này luôn thay thế những công nghệ giày hiện đại lên các thiết kế cổ điển thay vì chỉ là tung ra các phiên bản giày retro như những thương hiệu khác thường làm. </li> <li>Với adidas EQT, chính bạn là người tạo ra xu hướng và phong cách độc đáo cho riêng mình.</li> <li>Sự tối giản trong thiết kế, màu sắc độc đáo - người mang adidas EQT sẽ tự tạo ra phong cách cho riêng mình, trụ vững, nổi bật trong dòng chảy luôn có xu hướng quay vòng và đào thải của thời trang.</li> </ul> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ6.png " alt="" width="60%"></p> <p><strong>Hướng dẫn chọn size:</strong></p> <p> <img src="uploads/Screen Shot 2018-08-24 at 12.14.02.png "alt="" width="60%"></p> </div>',
            'price' => '2300000',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'NIKE AIR MAX 270 "JUST DO IT"',
            'slug' => 'nike-air-max-270',
            'pic' => 'nike-air-max-270.jpg',
            'spec' => '',
            'short_desc' => '',
            'desc' => '',
            'price' => '2300000',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'ADIDAS ULTRABOOST 4.0',
            'slug' => 'adidas-ultraboost-40',
            'pic' => '1561799915_adidas-ultraboost-4-0.png',
            'spec' => '',
            'short_desc' => '',
            'desc' => '',
            'price' => '3300000',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneaker Unisex Converse Chuck Taylor All Star 1970s Black/w 2018',
            'slug' => 'sneaker-unisex-converse-chuck-taylor-all-star-1970s-blackw-2018',
            'pic' => '1561886881_giay-sneaker-unisex-converse-chuck-taylor-all-star-1970s-black-w-2018.jpg',
            'spec' => '<table border="1" cellpadding="0" cellspacing="0" style="width:500px">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>Converse</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>Mỹ</td>
                    </tr>
                    <tr>
                        <td>Sản xuất tại</td>
                        <td>Việt Nam/ Ấn Độ/ Trung Quốc</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>8532162220597</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'short_desc' => 'Là dòng giày tiêu biểu và đặc trưng cho phong cách cổ điển của Converse.
            Chất vải canvas nhẹ, tạo cảm giác thoải mái.
            Lớp lót dày tạo cảm giác êm ái khi vận động.
            Phiên bản mới lớp lót được cải tiến êm hơn & có thể tháo rời giúp bạn dễ dàng vệ sinh.
            Phần đế màu trắng ngà vintage được phủ 1 lớp bóng bên ngoài.
            Logo bên hông giày với phù hiệu của Converse All Star kết hợp với chữ ký của Chuck Taylor.',
            'desc' => '<ul>
                <li><strong>Gi&agrave;y Sneaker Unisex Converse Chuck Taylor All Star 1970s Black/w 2018</strong>&nbsp;được thiết kế từ chất liệu vải canvas nhẹ,&nbsp;d&agrave;y dặn, cứng form hơn.&nbsp;</li>
                <li>Lớp lót dày tạo cảm giác &ecirc;m ái khi v&acirc;̣n đ&ocirc;̣ng, vải d&agrave;y dặn, cứng form hơn.</li>
                <li>Phần đế m&agrave;u trắng ng&agrave; vintage được phủ 1 lớp b&oacute;ng b&ecirc;n ngoài là đi&ecirc;̉m nh&acirc;́n ri&ecirc;ng cho dòng 1970s, dễ vệ sinh hơn.</li>
                <li>D&acirc;y gi&agrave;y d&agrave;y hơn, c&ugrave;ng m&agrave;u với phần đế, tem g&oacute;t đen 1st-tring - đặc trưng ri&ecirc;ng của d&ograve;ng 1970s.</li>
                <li>L&agrave; biểu tượng của văn h&oacute;a thể thao v&agrave; c&aacute;c loại h&igrave;nh nghệ thuật đường phố kiểu Mỹ, truyền cảm hứng v&agrave; sức s&aacute;ng tạo mạnh mẽ đến giới trẻ tr&ecirc;n to&agrave;n thế giới.</li>
            </ul>',
            'price' => '1850000',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneaker Unisex Vans Old Skool Black/White',
            'slug' => 'sneaker-unisex-vans-old-skool-blackwhite',
            'pic' => '1561887332_unisex-old-skool-vans.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>&nbsp;Thương hiệu</td>
                        <td>&nbsp;Vans</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Xuất xứ thương hiệu</td>
                        <td>&nbsp;Mỹ</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Sản xuất tại</td>
                        <td>&nbsp;Việt Nam / Trung Quốc</td>
                    </tr>
                    <tr>
                        <td>&nbsp;SKU</td>
                        <td>&nbsp;3439714695139</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Model</td>
                        <td>&nbsp;VN000D3HY28</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Chất liệu</td>
                        <td>&nbsp;57% Leather, 43% Canvas</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Lưu &yacute;</td>
                        <td>&nbsp;Sản phẩm kh&ocirc;ng hỗ trợ đổi trả</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Đường may tỉ mỉ chắc chắn, dễ vệ sinh. 
            Thiết kế đặc trưng mang đậm chất đường phố. 
            Dễ dàng phối đồ trong mọi hoàn cảnh. 
             Đế giày có độ bám cao.',
            'desc' => '<ul>
                <li><strong>Gi&agrave;y Sneaker Unisex Vans Old Skool Black/White</strong>&nbsp;l&agrave; d&ograve;ng gi&agrave;y được thiết kế đa dạng kiểu d&aacute;ng b&ecirc;n th&acirc;n gi&agrave;y.</li>
                <li>Kiểu d&aacute;ng cổ điển, dễ vệ sinh, với đường may tỉ mỉ chắc chắn.</li>
                <li>Sản phẩm gi&uacute;p hỗ trợ cho bạn hoạt động, di chuyển linh hoạt hơn.</li>
                <li>Phối m&agrave;u cực kỳ đa dạng cho bạn dễ d&agrave;ng lựa chọn v&agrave; thỏa sức mix, match với bất kỳ phong c&aacute;ch n&agrave;o.</li>
                <li>Đa phần thiết kế của Vans ưu ti&ecirc;n bảo vệ đ&ocirc;i ch&acirc;n người d&ugrave;ng tạo n&ecirc;n độ chắc chắn v&agrave; gắn kết ho&agrave;n hảo giữa đế v&agrave; th&acirc;n gi&agrave;y mang một vẻ liền khối.</li>
            </ul>',
            'price' => '1650000',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneakers Nam GEOX U NEXSIDE A WHITE',
            'slug' => 'sneakers-nam-geox-u-nexside-a-white',
            'pic' => '1561887480_geox-u-nexside-a-white.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>GEOX</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>&Yacute;</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>7879657453278</td>
                    </tr>
                    <tr>
                        <td>Chất liệu</td>
                        <td>73% Leather Bovine Full Grain-14% Textile Mesh Polyester-13% Synthetic Polyureth</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Geox là một thương hiệu thời trang nổi tiếng của Ý, chuyên sản xuất giày dép, quần áo, túi xách, phụ kiện cho nam, nữ, trẻ em bằng chất liệu vải thoáng khí và không thấm nước. Ra đời năm 1995, dù chỉ có 20 năm hoạt động nhưng Geox đã nhanh chóng trở thành thương hiệu thời trang hàng đầu thế giới, có mặt tại hơn 65 quốc gia.',
            'desc' => '<p>Geox l&agrave; một thương hiệu thời trang nổi tiếng của &Yacute;, chuy&ecirc;n sản xuất gi&agrave;y d&eacute;p, quần &aacute;o, t&uacute;i x&aacute;ch, phụ kiện cho nam, nữ, trẻ em bằng chất liệu vải tho&aacute;ng kh&iacute; v&agrave; kh&ocirc;ng thấm nước. Ra đời năm 1995, d&ugrave; chỉ c&oacute; 20 năm hoạt động nhưng Geox đ&atilde; nhanh ch&oacute;ng trở th&agrave;nh thương hiệu thời trang h&agrave;ng đầu thế giới, c&oacute; mặt tại hơn 65 quốc gia.</p>',
            'price' => '5500000',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'THEWOLF - 62CMDL-THE CLASSIC CHELSEA BOOT- BLACK',
            'slug' => 'thewolf-62cmdl-the-classic-chelsea-boot-black',
            'pic' => '1561887865_the-classic-chelsea-boot-black.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>THEWOFT</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>Việt Nam</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>7088006243150</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>THE CLASSIC CHELSEA BOOT</td>
                    </tr>
                    <tr>
                        <td>M&agrave;u/mẫu</td>
                        <td>Đen Nh&aacute;m Đen</td>
                    </tr>
                    <tr>
                        <td>K&iacute;ch cỡ</td>
                        <td>39-42</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Màu sắc: Đen láng. 
            Chất liệu mũ giày: Da bò nhập khẩu. 
            Đế giày: Cao su nguyên chất chống trượt, độ bền cao. 
            Lót trong: Da dê, vải canvas cao cấp có khả năng hút ẩm cao, êm ái.',
            'desc' => '',
            'price' => '1800000',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Gino Rossi MTV652-R85-AGRG-9999 - Đen',
            'slug' => 'gino-rossi-mtv652-r85-agrg-9999-den',
            'pic' => '1561887940_gino-rossi-mtv652-r85-agrg-9999.jpg',
            'spec' => '',
            'short_desc' => 'Được sản xuất từ da bò Ý. 
            Đế giày đàn hồi tạo cảm giác êm ái. 
            Kiểu dáng sang trọng. 
            Đường may tỉ mỉ, chắc chắn.',
            'desc' => '',
            'price' => '6280000',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Giày Tây Nam Vina-Giầy AGT.H0025-DE - Đen',
            'slug' => 'giay-tay-nam-vina-giay-agth0025-de-den',
            'pic' => '1561888150_vina-giay-agt-h0025-de-den.jpg',
            'spec' => '',
            'short_desc' => 'Chất liệu da cao cấp. 
            Đế cao su êm ái, nhẹ nhàng. 
            Lót da mềm mại, thoải mái. 
            Sản phẩm được bảo hành theo hệ thống cả nước.',
            'desc' => '',
            'price' => '1050000',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Giày Tây Nam Da Bò SUNPOLO SU111D - Đen',
            'slug' => 'giay-tay-nam-da-bo-sunpolo-su111d-den',
            'pic' => '1561888242_sunpolo-su111d.jpg',
            'spec' => '',
            'short_desc' => 'Chất liệu da bò bền đẹp. 
            Đế cao su cao 3cm chống trơn trượt. 
            Lót chân bằng da thật mềm mại cân đối. 
            Thiết kế cột dây sang trọng, lịch sự. 
            Thích hợp nơi công sở, đi chơi, dự tiệc.',
            'desc' => '',
            'price' => '680000',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Giày đá bóng Adidas Predator 19.3 TF xám xanh',
            'slug' => 'giay-da-bong-adidas-predator-193-tf-xam-xanh',
            'pic' => '1561889208_adidas-predator-19-3-tf.jpg',
            'spec' => '',
            'short_desc' => 'Thiết kế hiện đại với chiếc cổ chun được làm lại, giúp cho bạn có thể xỏ đôi giày chỉ trong vòng một nốt nhạc. Mặc dù vậy, Adidas Predator 2018 vẫn mang hơi thở của các thế hệ đàn anh đi trước, với đặc trưng kiểm soát bóng , kiểm soát cuộc chơi.',
            'desc' => '<p><strong>Gi&agrave;y đ&aacute; banh Adidas Predator 19.3 TF cao cổ x&aacute;m xanh c&oacute; g&igrave; đặc biệt?</strong></p>
            
            <ul>
                <li><strong>V&acirc;n nổi</strong>&nbsp;ở mũi v&agrave; m&aacute; trong của gi&agrave;y (Hỗ trợ&nbsp;<strong>kiểm so&aacute;t b&oacute;ng</strong>&nbsp;tốt)</li>
                <li><strong>Form gi&agrave;y thoải m&aacute;i</strong>&nbsp;(Mang lại sự thoải m&aacute;i kể cả với ch&acirc;n b&egrave;)</li>
                <li><strong>Đế gi&agrave;y &ecirc;m &aacute;i</strong>&nbsp;(C&oacute; lớp&nbsp;<strong>boost</strong>&nbsp;giảm chấn)</li>
                <li>M&agrave;u sắc đẹp mắt (<strong>M&agrave;u x&aacute;m xanh</strong>&nbsp;nhẹ nh&agrave;ng)</li>
                <li>Mang lại sự chắc ch&acirc;n (<strong>Kh&ocirc;ng bị mỏi ch&acirc;n</strong>&nbsp;khi chơi b&oacute;ng)</li>
            </ul>',
            'price' => '1800000',
        ]);
    }
}
