<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->date('prazo');
            $table->string('concluido_prazo')->nullable();  
            
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')
                ->references('id')->on('projetos')
                ->onDelete('cascade');

            $table->integer('cliente_id')->unsigned();       
            $table->foreign('cliente_id')
                ->references('id')->on('projetos')
                ->onDelete('cascade');

            $table->string('subtarefas');
            $table->time('horas')->nullable();

            $table->integer('responsavel')->unsigned(); 
            $table->foreign('responsavel')
                ->references('id')->on('users')
                ->onDelete('cascade');


            $table->integer('envolvidos')->unsigned(); 
            $table->foreign('envolvidos')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->string('status')->nullable();
            $table->string('situacao')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
