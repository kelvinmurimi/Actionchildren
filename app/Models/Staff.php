<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'bio',
        'department_id',
        'position',
    ];

    //Department Belongs to Staff
    public function department(){
        return $this->belongsTo(Department::class);
      }



}
