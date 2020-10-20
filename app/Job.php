<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['titulo','prazo','concluido_prazo','subtarefas','horas','responsavel','envolvidos','status','situacao'];

}
