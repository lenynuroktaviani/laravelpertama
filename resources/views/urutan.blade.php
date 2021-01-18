<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class friends extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];

    public function groups()
    {
        return $this->belongsTo('App\Models\groups');
    }
}