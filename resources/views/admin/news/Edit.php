<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tạo mới Tin tức</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Thông tin Tin tức</h6>
            <a href="/admin/news/" class="btn btn-secondary btn-sm">Quay lại Danh sách</a>
        </div>
        <div class="card-body">
            <form action="/admin/news/save/" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $news->id ?? '' ?>">
                <div class="form-group">
                    <label for="image">Hình ảnh (Image)</label>
                    <br>
                    <img src="/images/<?= $news->image?>" style="width: 150px; height: auto; object-fit: cover;" alt="">
                    <input type="file" class="form-control-file" id="image" name="image" value="">
                    <small class="form-text text-muted">Chọn hình ảnh cho tin tức.</small>
                </div>

                <div class="form-group">
                    <label for="title">Tiêu đề (Title)</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $news->title?>">
                </div>

                <div class="form-group">
                    <label for="description">Mô tả (Description)</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?= $news->description?></textarea>
                </div>

                <div class="form-group">
                        <label for="auto_type">url</label>
                        <input type="text" class="form-control" id="auto_type" name="url" value="<?= $news->url?>">
                </div>


                <button type="submit" class="btn btn-primary">Tạo Tin tức</button>
                <a href="/admin/news/" class="btn btn-secondary">Hủy</a>
            </form>
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
                    console.log('New image selected:', file.name);
                }
            });
        }
    });
</script>