<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Chỉnh sửa Sản phẩm</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Thông tin Sản phẩm</h6>
            <a href="/admin/home/" class="btn btn-secondary btn-sm">Quay lại Danh sách</a>
        </div>
        <div class="card-body">
            <?php if (isset($product) && $product): ?>
                <form action="/admin/save/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($product->id ?? '') ?>">

                    <div class="form-group">
                        <label for="name">Tên sản phẩm (Name)</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($product->name ?? '') ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Tiêu đề (Title)</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($product->title ?? '') ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Mô tả (Description)</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= htmlspecialchars($product->description ?? '') ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Hình ảnh (Image)</label>
                        <br>
                        <?php if (!empty($product->image)): ?>
                            <img src="/images/<?= htmlspecialchars($product->image) ?>"
                                alt="<?= htmlspecialchars($product->name ?? 'Product Image') ?>"
                                style="width: 150px; height: auto; object-fit: cover; margin-bottom: 10px;">
                        <?php else: ?>
                            <p>Không có hình ảnh hiện tại.</p>
                        <?php endif; ?>
                        <input type="file" class="form-control-file" id="image" name="image">
                        <small class="form-text text-muted">Để trống nếu không muốn thay đổi hình ảnh hiện tại.</small>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="auto_type">Loại xe (Type)</label>
                            <input type="text" class="form-control" id="auto_type" name="auto_type" value="<?= htmlspecialchars($product->auto_type ?? '') ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="engine">Động cơ (Engine)</label>
                            <input type="text" class="form-control" id="engine" name="engine" value="<?= htmlspecialchars($product->engine ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="power">Công suất (Power)</label>
                            <input type="text" class="form-control" id="power" name="power" value="<?= htmlspecialchars($product->power ?? '') ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hop_so">Hộp số (Gearbox)</label>
                            <input type="text" class="form-control" id="hop_so" name="hop_so" value="<?= htmlspecialchars($product->hop_so ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dan_dong">Dẫn động (Drivetrain)</label>
                            <input type="text" class="form-control" id="dan_dong" name="dan_dong" value="<?= htmlspecialchars($product->dan_dong ?? '') ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="trong_luong">Trọng lượng (Weight)</label>
                            <input type="text" class="form-control" id="trong_luong" name="trong_luong" value="<?= htmlspecialchars($product->trong_luong ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="chieu_dai">Chiều dài (Length)</label>
                            <input type="text" class="form-control" id="chieu_dai" name="chieu_dai" value="<?= htmlspecialchars($product->chieu_dai ?? '') ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="chieu_rong">Chiều rộng (Width)</label>
                            <input type="text" class="form-control" id="chieu_rong" name="chieu_rong" value="<?= htmlspecialchars($product->chieu_rong ?? '') ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="chieu_cao">Chiều cao (Height)</label>
                            <input type="text" class="form-control" id="chieu_cao" name="chieu_cao" value="<?= htmlspecialchars($product->chieu_cao ?? '') ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Cập nhật Sản phẩm</button>
                    <a href="/admin/home/" class="btn btn-secondary">Hủy</a>
                </form>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    Không tìm thấy thông tin sản phẩm để chỉnh sửa. Vui lòng kiểm tra lại ID sản phẩm.
                </div>
                <a href="/admin/home/" class="btn btn-primary">Quay lại Danh sách</a>
            <?php endif; ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    // Optional: Client-side validation or enhancements can be added here.
    // For example, previewing the image before upload.
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('image');
        if (imageInput) {
            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    // You can add code here to display a preview of the selected image
                    // For example, by creating an <img> element and setting its src
                    // to URL.createObjectURL(file).
                    // This is just a placeholder for potential client-side enhancement.
                    console.log('New image selected:', file.name);
                }
            });
        }
    });
</script>


