<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cama extends Model
{
    use HasFactory;

    protected $table = 'camas'; // Asegura el nombre correcto de la tabla
    protected $primaryKey = 'id_cama'; // Si la clave primaria es id_cama y no id
    public $timestamps = false; // Si tu tabla no tiene created_at y updated_at

    protected $fillable = ['numero', 'estado', 'fecha_inicio']; // Columnas que puedes llenar
}
