 <!-- Hero Section -->
 <section class="hero">
     <div class="hero-content">
         <h2 class="hero-title">VĨNH CỬU <br>TRƯỜNG TỒN</h2>
         <a href="#" class="cta-button">KHÁM PHÁ BUGATTI TOURBILLON</a>
     </div>
 </section>

 <!-- Models Section -->
 <section class="models-section">
     <div class="section-header">
         <h2>XE THỂ THAO SIÊU SANG</h2>
         <p>KHÁM PHÁ SỰ PHI THƯỜNG</p>
     </div>
     <div class="models-container">
         <?php foreach ($auto_type['sport'] as $auto): ?>
             <div class="model-card">
                 <div class="model-image">
                  <a href="/client/detail/?id=<?= $auto['id']?>">    <img src="/images/<?= $auto['image'] ?>" alt="Bugatti Chiron">
                </div>
                 <div class="model-info">
                     <h3><?= $auto['name'] ?></h3>
                     <p><?= $auto['title'] ?></p>
                     <a href="/client/detail/?id=<?= $auto['id'] ?>" class="model-link">TÌM HIỂU THÊM</a>
                 </div>
             </div>
         <?php endforeach; ?>
         
     </div>
 </section>

 <!-- Heritage Section -->
 <section class="heritage-section">
     <div class="heritage-content">
         <div class="heritage-text">
             <h2>DI SẢN XUẤT SẮC</h2>
             <p>Trong hơn 110 năm, Bugatti đã tạo ra những kiệt tác ô tô kết hợp nghệ thuật, công nghệ và hiệu suất theo những cách chưa từng có.</p>
             <a href="#" class="cta-button">KHÁM PHÁ DI SẢN CỦA CHÚNG TÔI</a>
         </div>
         <?php foreach($auto_type['new'] as $auto): ?>
             <div class="heritage-image">
                <a href="/client/detail/?id=<?= $auto['id'] ?>"> <img src="/images/<?= $auto['image'] ?>" alt="Di sản Bugatti">
                </a>
             </div>
       <?php endforeach ?>
     </div>
 </section>

 <!-- Innovation Section -->
 <section class="innovation-section">
     <div class="innovation-image">
         <img src="/images/banner.webp" alt="Đổi mới Bugatti">
     </div>
     <div class="innovation-content">
         <h2>ĐỔI MỚI VƯỢT TƯỞNG TƯỢNG</h2>
         <p>Mở rộng giới hạn của những điều có thể trong kỹ thuật và thiết kế ô tô.</p>
         <a href="#" class="cta-button">KHÁM PHÁ CÔNG NGHỆ CỦA CHÚNG TÔI</a>
     </div>
 </section>

 <!-- Lifestyle Section -->
 <section class="lifestyle-section">
     <div class="section-header">
         <h2>PHONG CÁCH SỐNG BUGATTI</h2>
         <p>TRẢI NGHIỆM SỰ PHI THƯỜNG</p>
     </div>
     <div class="lifestyle-grid">
         <div class="lifestyle-item">
             <img src="/images/fashion.jpg" alt="Thời trang Bugatti">
             <div class="lifestyle-overlay">
                 <h3>THỜI TRANG</h3>
                 <a href="#">KHÁM PHÁ</a>
             </div>
         </div>
         <div class="lifestyle-item">
             <img src="/images/furniture2.jpg" alt="Nội thất Bugatti">
             <div class="lifestyle-overlay">
                 <h3>NỘI THẤT</h3>
                 <a href="#">KHÁM PHÁ</a>
             </div>
         </div>
         <div class="lifestyle-item">
             <img src="/images/watch2.webp" alt="Đồng hồ Bugatti">
             <div class="lifestyle-overlay">
                 <h3>ĐỒNG HỒ</h3>
                 <a href="#">KHÁM PHÁ</a>
             </div>
         </div>
         <div class="lifestyle-item">
             <img src="/images/phukien.webp" alt="Phụ kiện Bugatti">
             <div class="lifestyle-overlay">
                 <h3>PHỤ KIỆN</h3>
                 <a href="#">KHÁM PHÁ</a>
             </div>
         </div>
     </div>
 </section>

 <!-- News Section -->
 <section class="news-section">
     <div class="section-header">
         <h2>TIN TỨC MỚI NHẤT</h2>
         <a href="#" class="view-all">XEM TẤT CẢ</a>
     </div>
     <div class="news-container">
         <div class="news-card">
             <div class="news-image">
                 <img src="/images/tintuc1.webp" alt="Tin tức Bugatti">
             </div>
             <div class="news-info">
                 <span class="news-date">10 THÁNG 5, 2025</span>
                 <h3>BUGATTI RA MẮT SIÊU XE TOURBILLON MỚI</h3>
                 <p>Kiệt tác mới nhất từ Molsheim thiết lập tiêu chuẩn mới trong sự xuất sắc của ngành ô tô.</p>
                 <a href="#">ĐỌC THÊM</a>
             </div>
         </div>
         <div class="news-card">
             <div class="news-image">
                 <img src="/images/tintuc2.webp" alt="Tin tức Bugatti">
             </div>
             <div class="news-info">
                 <span class="news-date">28 THÁNG 4, 2025</span>
                 <h3>BUGATTI HỢP TÁC VỚI THƯƠNG HIỆU ĐỒNG HỒ CAO CẤP</h3>
                 <p>Sự hợp tác mang đến những tinh hoa trong chế tác ô tô và đồng hồ.</p>
                 <a href="#">ĐỌC THÊM</a>
             </div>
         </div>
         <div class="news-card">
             <div class="news-image">
                 <img src="/images/tintuc3.webp" alt="Tin tức Bugatti">
             </div>
             <div class="news-info">
                 <span class="news-date">15 THÁNG 4, 2025</span>
                 <h3>BUGATTI KỶ NIỆM NĂM PHÁ KỶ LỤC</h3>
                 <p>Nhu cầu chưa từng có đối với những siêu xe độc quyền nhất thế giới.</p>
                 <a href="#">ĐỌC THÊM</a>
             </div>
         </div>
     </div>
 </section>