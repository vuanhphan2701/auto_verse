<?php 
namespace Models;
use  Panda\Core\Models\Model;
class Product extends Model
{
      // Tên bảng trong cơ sở dữ liệu
      protected string $table = 'auto';

      // Khóa chính của bảng
      protected string $primaryKey = 'id';
  
      // Các cột được phép gán giá trị hàng loạt (mass assignment)
      protected array $fillable = [
         'id',
         'name',
         'title',
         'description',
         'image',
         'auto_type',
         'engine',
         'power',
         'mo_men_xoan',
         'hop_so',
         'dan_dong',
         'trong_luong',
         'chieu_dai',
         'chieu_rong',
         'chieu_cao',
         'dung_tich_nhien_lieu'
      ];
}