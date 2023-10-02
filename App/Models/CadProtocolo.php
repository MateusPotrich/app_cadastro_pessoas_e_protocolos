<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadProtocolo extends Model
{
    protected $table = 'cad_protocolos';
    protected $fillable = ['nome_contribuidor', 'sac_contribuintesite', 'setor', 'data_registro','fotos'];
}
