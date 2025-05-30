<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Quản lý Sản phẩm</h1>
    <p class="mb-4">Xem, thêm, sửa, xóa các sản phẩm trong hệ thống.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách Sản phẩm</h6>
            <a href="/admin/create/" class="btn btn-primary btn-sm">Thêm mới Sản phẩm</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Type (auto_type)</th>
                            <th>Engine</th>
                            <th>Power</th>
                            <th>Gearbox (hop_so)</th>
                            <th>Drivetrain (dan_dong)</th>
                            <th>Weight (trong_luong)</th>
                            <th>Length (chieu_dai)</th>
                            <th>Width (chieu_rong)</th>
                            <th>Height (chieu_cao)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($list) && is_array($list) && count($list) > 0): ?>
                            <?php foreach ($list as $product): ?>
                                <tr>
                                    <td><?= htmlspecialchars($product->id ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->name ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->title ?? 'N/A') ?></td>
                                    <td>
                                        <?php
                                        $description = htmlspecialchars($product->description ?? 'N/A');
                                        if (strlen($description) > 50) {
                                            echo substr($description, 0, 47) . '...';
                                        } else {
                                            echo $description;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($product->image)): ?>
                                            <img src="/images/<?= htmlspecialchars($product->image) ?>" alt="<?= htmlspecialchars($product->name ?? 'Product Image') ?>" style="width: 100px; height: auto; object-fit: cover;">
                                            <!-- Adjust /assets/images/ path as per your project structure -->
                                        <?php else: ?>
                                            No Image
                                        <?php endif; ?>
                                    </td>
                                    <td><?= htmlspecialchars($product->auto_type ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->engine ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->power ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->hop_so ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->dan_dong ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->trong_luong ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->chieu_dai ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->chieu_rong ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars($product->chieu_cao ?? 'N/A') ?></td>
                                    <td>
                                        <a href="/admin/edit/?id=<?= htmlspecialchars($product->id ?? '') ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="/admin/delete/?id=<?= htmlspecialchars($product->id ?? '') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="15" class="text-center">Không có sản phẩm nào.</td>
                            </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->