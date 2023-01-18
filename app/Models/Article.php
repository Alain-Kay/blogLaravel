<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;

    protected $fillable =
     [
         'title', 
         'subtitle', 
         'content'
    ];

    public function dateFormat()
    {
        return date_format($this->created_at, 'd-M-Y H:i');
    }
}
