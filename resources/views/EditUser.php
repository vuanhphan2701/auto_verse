<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin người dùng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 600px;
        }
        
        .edit-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .card-header {
            background-color: #4a6cf7;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .card-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .card-body {
            padding: 25px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #4a6cf7;
        }
        
        .form-control[readonly] {
            background-color: #f9f9f9;
            cursor: not-allowed;
        }
        
        .form-note {
            font-size: 0.85rem;
            color: #888;
            margin-top: 5px;
        }
        
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            font-size: 1rem;
        }
        
        .btn-primary {
            background-color: #4a6cf7;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #3a5ce5;
        }
        
        .btn-secondary {
            background-color: #e4e6eb;
            color: #333;
        }
        
        .btn-secondary:hover {
            background-color: #d4d6db;
        }
        
        .breadcrumb {
            display: flex;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .breadcrumb a {
            color: #4a6cf7;
            text-decoration: none;
        }
        
        .breadcrumb span {
            margin: 0 8px;
            color: #888;
        }
        
        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <a href="/admin/home">Danh sách người dùng</a>
            <span>/</span>
            <a href="#">Chỉnh sửa người dùng</a>
        </div>
        
        <div class="edit-card">
            <div class="card-header">
                <h2>Chỉnh sửa thông tin người dùng</h2>
            </div>
            <div class="card-body">
                <form action="/admin/user/saveEdit" method="post">
                    <div class="form-group">
                        <label for="Id">ID</label>
                        <input type="text" id="id" name="id" class="form-control" value="<?=$user->id?>" readonly>
                        <p class="form-note">ID không thể thay đổi</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?=$user->user_name?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?=$user->email?>" required>
                    </div>
                    
               
                    
                    <div class="form-actions">
                        <a href="/admin/home" class="btn btn-secondary">Hủy bỏ</a>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>