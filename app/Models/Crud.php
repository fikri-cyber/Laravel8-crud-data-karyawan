<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model

{
    use HasFactory;
    /**
* fillable
*
* @var array
*/
protected $fillable = [
    'Nama_Karyawan', 'Umur', 'Jenis_Kelamin', 'Alamat'
];
}
