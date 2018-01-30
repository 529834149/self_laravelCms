<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 知识点
 * 1、php artisan make:model Models/Category -m 在创建模型时生成表的迁移文件  执行 php artisan migrate 进行数据迁移
 * 2、protected  fillable 设置允许操作的字段
 * 3、数据填充可以查看当前文件database/migrations/2018_01_30_062416_seed_categories_data
 * 
 */
class Category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
}
