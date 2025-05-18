<!-- Banner -->
<div class="banner">
    <img src="/images/car20.jpg" alt="Bugatti Collection">
    <div class="banner-content">
        <h1>BỘ SƯU TẬP BUGATTI</h1>
        <p>KHÁM PHÁ CÁC MẪU XE ĐẲNG CẤP</p>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-options">
            <div class="filter-group">
                <label for="sort-by">Sắp xếp theo:</label>
                <select id="sort-by" class="filter-select">
                    <option value="newest">Mới nhất</option>
                    <option value="price-high">Giá cao đến thấp</option>
                    <option value="price-low">Giá thấp đến cao</option>
                    <option value="name">Tên xe</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="filter-model">Dòng xe:</label>
                <select id="filter-model" class="filter-select">
                    <option value="all">Tất cả</option>
                    <option value="chiron">Chiron</option>
                    <option value="divo">Divo</option>
                    <option value="veyron">Veyron</option>
                    <option value="mistral">Mistral</option>
                </select>
            </div>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm xe...">
            <button class="search-btn">Tìm</button>
        </div>
    </div>

    <!-- Car Grid -->
    <div class="car-grid">
        <!-- Car Item 1 -->
        <?php

        foreach ($List as $auto): ?>
            <div class="car-item">
                <div class="car-image">
                    <a href="/admin/detail/?id=<?= $auto->id ?>">
                        <img src="/images/<?= $auto->image ?>" alt="Bugatti Chiron">
                    </a>
                    <div class="car-overlay">
                        <a href="/admin/detail/?id=<?= $auto->id ?>" class="view-details">Xem Chi Tiết</a>
                    </div>
                </div>
                <div class="car-info">
                    <h3><?= $auto->name ?></h3>
                    <p class="car-price">$3,000,000</p>
                    <div class="car-specs">
                        <div class="spec">
                            <span class="spec-value"><?= $auto->power ?></span>
                            <span class="spec-label">Công suất</span>
                        </div>
                        <div class="spec">
                            <span class="spec-value">420 km/h</span>
                            <span class="spec-label">Tốc độ tối đa</span>
                        </div>
                        <div class="spec">
                            <span class="spec-value">2.4s</span>
                            <span class="spec-label">0-100 km/h</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#" class="next">Tiếp &raquo;</a>
    </div>
</div>