<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Quản lý Tin tức</h1>
    <p class="mb-4">Xem, thêm, sửa, xóa các tin tức trong hệ thống.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách Tin tức</h6>
            <!-- TODO: Cập nhật link khi có trang tạo tin tức -->
            <a href="/admin/news/create/" class="btn btn-primary btn-sm">Thêm mới Tin tức</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>URL</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($newsList as $newsItem): ?>
                            <tr>
                                <td><?= $newsItem->id ?></td>
                                <td> <img src="/images/<?= $newsItem->image ?>" style="width: 150px; height: auto; object-fit: cover;" alt=""> </td>
                                <td><?= $newsItem->title ?></td>
                                <td>
                                    <?= $newsItem->description ?>
                                </td>
                                <td>
                                    <?= $newsItem->url ?>
                                </td>
                                <td><?= htmlspecialchars(isset($newsItem->created_at) ? (is_string($newsItem->created_at) ? $newsItem->created_at : $newsItem->created_at->format('Y-m-d H:i:s')) : (isset($newsItem['created_at']) ? $newsItem['created_at'] : 'N/A')) ?></td>
                                <td><?= htmlspecialchars(isset($newsItem->updated_at) ? (is_string($newsItem->updated_at) ? $newsItem->updated_at : $newsItem->updated_at->format('Y-m-d H:i:s')) : (isset($newsItem['updated_at']) ? $newsItem['updated_at'] : 'N/A')) ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="News item actions">
                                        <a href="/admin/news/edit/?id=<?= htmlspecialchars($newsItem->id ?? ($newsItem['id'] ?? '')) ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="/admin/news/delete/?id=<?= htmlspecialchars($newsItem->id ?? ($newsItem['id'] ?? '')) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this news item?');">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
    // Bạn có thể cần khởi tạo lại DataTable nếu nó không tự động áp dụng cho bảng mới
    // $(document).ready(function() {
    // $('#dataTable').DataTable(); // Đảm bảo ID của bảng là dataTable
    // });
</script>