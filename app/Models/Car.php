<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Car extends Model{
    protected $table = 'car_listings';
    protected $fillable = ['model', 'cost'];
}
