<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="estado";
    protected $primaryKey="id_estado";
    protected $foreingKey="id_pais";
    protected $fillable=["estado"];
}
