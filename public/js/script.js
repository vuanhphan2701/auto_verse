 function toggleMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
            document.querySelector('.mobile-menu-toggle').classList.toggle('active');
        }
   // Đơn giản hóa JavaScript - chỉ thêm hiệu ứng cuộn mượt
document.addEventListener('DOMContentLoaded', function() {
    // Thêm hiệu ứng cuộn mượt cho các liên kết
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Hiệu ứng hiển thị khi cuộn
    const fadeInElements = document.querySelectorAll('.car-info > div');
    
    const fadeInOnScroll = function() {
        fadeInElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight * 0.9) {
                element.classList.add('visible');
            }
        });
    };
    
    // Thêm CSS cho hiệu ứng
    const style = document.createElement('style');
    style.innerHTML = `
        .car-info > div {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .car-info > div.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .car-info > div:nth-child(1) {
            transition-delay: 0.1s;
        }
        
        .car-info > div:nth-child(2) {
            transition-delay: 0.2s;
        }
        
        .car-info > div:nth-child(3) {
            transition-delay: 0.3s;
        }
        
        .car-info > div:nth-child(4) {
            transition-delay: 0.4s;
        }
    `;
    document.head.appendChild(style);
    
    // Chạy khi cuộn
    window.addEventListener('scroll', fadeInOnScroll);
    
    // Chạy một lần khi tải trang
    setTimeout(fadeInOnScroll, 100);
});

// -------------------
document.addEventListener('DOMContentLoaded', function() {
    // Hiệu ứng hiển thị khi cuộn
    const fadeInElements = document.querySelectorAll('.car-item');
    
    const fadeInOnScroll = function() {
        fadeInElements.forEach((element, index) => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight * 0.9) {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 100); // Thêm độ trễ để tạo hiệu ứng lần lượt
            }
        });
    };
    
    // Thêm CSS cho hiệu ứng
    const style = document.createElement('style');
    style.innerHTML = `
        .car-item {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.3s, transform 0.3s;
        }
        
        .car-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .car-item:hover {
            transform: translateY(-5px) !important;
        }
    `;
    document.head.appendChild(style);
    
    // Chạy khi cuộn
    window.addEventListener('scroll', fadeInOnScroll);
    
    // Chạy một lần khi tải trang
    setTimeout(fadeInOnScroll, 100);
    
    // Xử lý lọc và tìm kiếm
    const sortSelect = document.getElementById('sort-by');
    const modelSelect = document.getElementById('filter-model');
    const searchInput = document.querySelector('.search-box input');
    const searchButton = document.querySelector('.search-btn');
    
    // Giả lập chức năng tìm kiếm
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm) {
            alert('Đang tìm kiếm: ' + searchTerm);
            // Trong thực tế, bạn sẽ thực hiện tìm kiếm thực sự ở đây
        }
    });
    
    // Giả lập chức năng lọc
    sortSelect.addEventListener('change', function() {
        const sortValue = this.value;
        alert('Đang sắp xếp theo: ' + sortValue);
        // Trong thực tế, bạn sẽ thực hiện sắp xếp thực sự ở đây
    });
    
    modelSelect.addEventListener('change', function() {
        const modelValue = this.value;
        alert('Đang lọc theo dòng xe: ' + modelValue);
        // Trong thực tế, bạn sẽ thực hiện lọc thực sự ở đây
    });
    
    // Xử lý phân trang
    const paginationLinks = document.querySelectorAll('.pagination a');
    
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Xóa lớp active từ tất cả các liên kết
            paginationLinks.forEach(l => l.classList.remove('active'));
            
            // Thêm lớp active cho liên kết được nhấp
            this.classList.add('active');
            
            // Cuộn lên đầu danh sách xe
            document.querySelector('.filter-section').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
// -----------------------------------news---------
document.addEventListener('DOMContentLoaded', function() {
    // Hiệu ứng hiển thị khi cuộn
    const fadeInElements = document.querySelectorAll('.news-item');
    
    const fadeInOnScroll = function() {
        fadeInElements.forEach((element, index) => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight * 0.9) {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 100); // Thêm độ trễ để tạo hiệu ứng lần lượt
            }
        });
    };
    
    // Thêm CSS cho hiệu ứng
    const style = document.createElement('style');
    style.innerHTML = `
        .news-item {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.3s, transform 0.3s;
        }
        
        .news-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .news-item:hover {
            transform: translateY(-5px) !important;
        }
    `;
    document.head.appendChild(style);
    
    // Chạy khi cuộn
    window.addEventListener('scroll', fadeInOnScroll);
    
    // Chạy một lần khi tải trang
    setTimeout(fadeInOnScroll, 100);
    
    // Xử lý lọc và tìm kiếm
    const sortSelect = document.getElementById('sort-by');
    const categorySelect = document.getElementById('filter-category');
    const searchInput = document.querySelector('.search-box input');
    const searchButton = document.querySelector('.search-btn');
    
    // Giả lập chức năng tìm kiếm
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm) {
            alert('Đang tìm kiếm: ' + searchTerm);
            // Trong thực tế, bạn sẽ thực hiện tìm kiếm thực sự ở đây
        }
    });
    
    // Giả lập chức năng lọc
    sortSelect.addEventListener('change', function() {
        const sortValue = this.value;
        alert('Đang sắp xếp theo: ' + sortValue);
        // Trong thực tế, bạn sẽ thực hiện sắp xếp thực sự ở đây
    });
    
    categorySelect.addEventListener('change', function() {
        const categoryValue = this.value;
        alert('Đang lọc theo danh mục: ' + categoryValue);
        // Trong thực tế, bạn sẽ thực hiện lọc thực sự ở đây
    });
    
    // Xử lý nút "Xem thêm"
    const loadMoreBtn = document.getElementById('load-more-btn');
    
    loadMoreBtn.addEventListener('click', function() {
        // Giả lập tải thêm tin tức
        alert('Đang tải thêm tin tức...');
        // Trong thực tế, bạn sẽ tải thêm tin tức thực sự ở đây
        
        // Sau khi tải, bạn sẽ thêm các phần tử mới vào .news-list
        // Và sau đó gọi lại fadeInOnScroll() để áp dụng hiệu ứng cho các phần tử mới
    });
});
// JavaScript cho gallery và lightbox
function changeImage(src, thumbElement) {
    console.log('Changing image to:', src);
    
    // Thay đổi hình ảnh chính
    const mainImage = document.getElementById('main-gallery-image');
    if (mainImage) {
        mainImage.src = src;
    } else {
        console.error('Main gallery image element not found');
    }
    
    // Cập nhật trạng thái active cho thumbnail
    const thumbs = document.querySelectorAll('.thumb');
    if (thumbs.length > 0) {
        thumbs.forEach(thumb => {
            thumb.classList.remove('active');
        });
        thumbElement.classList.add('active');
    } else {
        console.error('Thumbnail elements not found');
    }
}

// Đảm bảo DOM đã tải xong
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded');
    
    // Mở lightbox khi click vào hình ảnh chính
    const mainImage = document.getElementById('main-gallery-image');
    const lightbox = document.getElementById('image-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    
    if (mainImage && lightbox && lightboxImg) {
        console.log('Gallery elements found');
        
        mainImage.addEventListener('click', function() {
            console.log('Main image clicked, src:', this.src);
            lightbox.style.display = 'flex';
            lightboxImg.src = this.src;
            document.body.style.overflow = 'hidden'; // Ngăn cuộn trang
        });
    } else {
        console.error('Gallery elements not found:', {
            mainImage: !!mainImage,
            lightbox: !!lightbox,
            lightboxImg: !!lightboxImg
        });
    }
    
    // Đóng lightbox khi click bên ngoài hình ảnh
    if (lightbox) {
        lightbox.addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
    }
    
    // Kiểm tra xem hình ảnh có tải được không
    const allImages = document.querySelectorAll('img');
    allImages.forEach(img => {
        img.addEventListener('error', function() {
            console.error('Failed to load image:', this.src);
            this.src = '/images/placeholder.jpg'; // Thay thế bằng hình ảnh mặc định
        });
    });
});

// Đóng lightbox
function closeLightbox() {
    console.log('Closing lightbox');
    const lightbox = document.getElementById('image-lightbox');
    if (lightbox) {
        lightbox.style.display = 'none';
        document.body.style.overflow = ''; // Khôi phục cuộn trang
    }
}