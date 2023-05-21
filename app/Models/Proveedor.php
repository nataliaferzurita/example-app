<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table="proveedores";
    protected $fillable=['cuit_proveedor','razonSocial_proveedor','nombreFantasia_proveedor','codigoPostal_proveedor','direccion_proveedor','telefono_proveedor','_token','created_at','updated_at'];
}
