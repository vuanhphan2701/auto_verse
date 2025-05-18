<?php
// dd($users);
// exit;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <style>
       .header-actions {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    
    .btn-add {
        background-color: #4a6cf7;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
        text-decoration: none; /* Loại bỏ gạch chân của thẻ a */
        text-align: center;
    }
    
    .btn-add:hover {
        background-color: #3a5ce5;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .btn-icon {
        font-size: 1.2rem;
        font-weight: bold;
    }
    
    @media (max-width: 768px) {
        .header-actions {
            flex-direction: column;
            width: 100%;
        }
        
        .btn-add {
            width: 100%;
            justify-content: center;
            margin-bottom: 10px;
        }
    }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e1e5eb;
        }

        .header h1 {
            color: #333;
            font-size: 1.8rem;
        }

        .search-box {
            display: flex;
            max-width: 300px;
        }

        .search-box input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-box button {
            padding: 10px 15px;
            background-color: #4a6cf7;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .user-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
        }

        .user-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4a6cf7;
            color: white;
            padding: 15px;
            font-weight: 600;
        }

        .card-body {
            padding: 15px;
        }

        .info-item {
            display: flex;
            margin-bottom: 8px;
            padding-bottom: 8px;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: 600;
            width: 100px;
            color: #555;
            font-size: 0.9rem;
        }

        .info-value {
            flex: 1;
            color: #333;
            font-size: 0.9rem;
        }

        .card-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .btn-edit {
            background-color: #4a6cf7;
            color: white;
        }

        .btn-edit:hover {
            background-color: #3a5ce5;
        }

        .btn-delete {
            background-color: #ff4757;
            color: white;
        }

        .btn-delete:hover {
            background-color: #e03444;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 5px;
        }

        .page-item {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            background-color: white;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: all 0.2s;
        }

        .page-item.active {
            background-color: #4a6cf7;
            color: white;
            border-color: #4a6cf7;
        }

        .page-item:hover:not(.active) {
            background-color: #f5f5f5;
        }

        @media (max-width: 768px) {
            .user-grid {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box {
                margin-top: 15px;
                width: 100%;
                max-width: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Thêm đoạn mã này vào phần header trong file index.html của giao diện danh sách người dùng -->
       <!-- Thêm đoạn mã này vào phần header trong file index.html của giao diện danh sách người dùng -->
<div class="header">
    <h1>Danh sách người dùng</h1>
    <div class="header-actions">
        <a href="/admin/user/add" class="btn btn-add">
            <span class="btn-icon">+</span>
            Thêm người dùng
        </a>
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm người dùng...">
            <button>Tìm</button>
        </div>
    </div>
</div>
        <!-- Kết thúc đoạn mã này -->

        <div class="user-grid">
            <!-- User 1 -->
            <?php foreach ($users as $user) { ?>
                <div class="user-card">
                    <div class="card-header">
                        <?= $user->user_name ?>
                    </div>
                    <div class="card-body">

                        <div class="info-item">
                            <div class="info-label">Username:</div>
                            <div class="info-value"><?= $user->user_name ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Email:</div>
                            <div class="info-value"><?= $user->email ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Created At:</div>
                            <div class="info-value"><?= $user->created_at ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Updated At:</div>
                            <div class="info-value"><?= $user->updated_at ?></div>
                        </div>
                        <div class="card-actions">
                            <form action="/admin/user/edit" method="POST">
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <button type="submit" class="btn btn-edit">Sửa</button>
                            </form>
                            <form method="POST" action="/admin/user/delete" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng <?= htmlspecialchars($user->user_name, ENT_QUOTES) ?> không?');">
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <button type="submit" class="btn btn-delete">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
</body>

</html>