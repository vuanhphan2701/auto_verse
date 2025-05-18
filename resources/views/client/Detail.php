 <!-- Hình ảnh chính của xe
    <div class="car-image">
        <img src="/images/" alt="Bugatti Chiron">
    </div> -->

 <!-- Thông tin cơ bản -->
 <div class="container">
     <div class="car-info">
         <h1><?= $data->name ?></h1>
         <p class="car-description"><?= $data->description ?></p>

         <!-- Gallery Section -->
         <div class="car-gallery">
             <h1 class=""><?= $data->name ?></h1>
             <p class="car-description"><?= $data->description ?></p>

             <div class="gallery-container">
                 <div class="gallery-main">
                     <?php if (!empty($images) && isset($images[0]['url'])): ?>
                         <img src="/images/<?= $data->image ?>" alt="<?= htmlspecialchars($data->name) ?>" id="main-gallery-image">
                     <?php else: ?>
                         <p>Không có hình ảnh để hiển thị.</p> <?php // Hoặc một ảnh placeholder 
                                                                ?>
                     <?php endif; ?>
                 </div>
                 <div class="gallery-thumbs">
                     <?php
                        foreach ($images as $index => $image):
                            //  dd($images);
                        ?>
                         <div class="thumb <?= $index === 0 ? 'active' : '' ?>" onclick="changeImage('/images/<?= $image['url'] ?>', this)">
                             <img src="/images/<?= $image['url'] ?>" alt="<?= $data->name ?> - Hình <?= $index + 1 ?>">
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>
         </div>

         <!-- Phần còn lại của trang -->
     </div>
     <!-- Thông số kỹ thuật cơ bản -->
     <div class="specs-basic">
         <div class="spec-item">
             <div class="spec-value"><?= $data->power ?></div>
             <div class="spec-label">Công suất</div>
         </div>
         <div class="spec-item">
             <div class="spec-value">420 km/h</div>
             <div class="spec-label">Tốc độ tối đa</div>
         </div>
         <div class="spec-item">
             <div class="spec-value">2,4 giây</div>
             <div class="spec-label">0-100 km/h</div>
         </div>
         <div class="spec-item">
             <div class="spec-value"><?= $data->engine ?></div>
             <div class="spec-label">Động cơ</div>
         </div>
     </div>

     <!-- Thông số kỹ thuật chi tiết -->
     <div class="specs-detailed">
         <h2>Thông Số Kỹ Thuật</h2>
         <table>
             <tr>
                 <td>Động cơ</td>
                 <td><?= $data->engine ?></td>
             </tr>
             <tr>
                 <td>Công suất</td>
                 <td><?= $data->power ?></td>
             </tr>
             <tr>
                 <td>Mô-men xoắn</td>
                 <td><?= $data->mo_men_xoan ?></td>
             </tr>
             <tr>
                 <td>Hộp số</td>
                 <td><?= $data->hop_so ?></td>
             </tr>
             <tr>
                 <td>Dẫn động</td>
                 <td><?= $data->dan_dong ?></td>
             </tr>
             <tr>
                 <td>Trọng lượng</td>
                 <td><?= $data->trong_luong ?></td>
             </tr>
             <tr>
                 <td>Chiều dài</td>
                 <td><?= $data->chieu_dai ?></td>
             </tr>
             <tr>
                 <td>Chiều rộng</td>
                 <td><?= $data->chieu_rong ?>/td>
             </tr>

             <tr>
                 <td>Chiều cao</td>
                 <td><?= $data->chieu_cao ?></td>
             </tr>
             <tr>
                 <td>Dung tích nhiên liệu</td>
                 <td><?= $data->dung_tich_nhien_lieu ?></td>
             </tr>
         </table>
     </div>

     <!-- Mô tả thêm -->
     <div class="additional-info">
         <h2>Giới Thiệu</h2>
         <p>Bugatti Chiron là siêu xe thể thao được sản xuất bởi nhà sản xuất ô tô Pháp Bugatti. Đây là mẫu xe kế nhiệm của Bugatti Veyron. Chiron được đặt theo tên của tay đua người Monaco Louis Chiron.</p>
         <p>Với động cơ W16 8.0L tăng áp kép, Chiron là một trong những siêu xe mạnh mẽ nhất thế giới. Xe được giới hạn sản xuất chỉ 500 chiếc, mang đến sự độc quyền và đẳng cấp cho chủ sở hữu.</p>
     </div>

     <!-- Nút liên hệ -->
     <div class="contact">
         <a href="#" class="contact-button">Liên Hệ Tư Vấn</a>
     </div>
 </div>
 </div>