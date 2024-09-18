<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Car extends Model{
    use HasFactory;
    protected $table = 'car_listings';
    protected $fillable = ['model', 'cost'];
}
