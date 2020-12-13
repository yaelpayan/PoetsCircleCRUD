<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('publicaciones')){
        Schema::table('publicaciones', function (Blueprint $table) {
            if(!Schema::hasColumn('idPoeta')){
                $table->increments('idPoeta');
            }
            if(!Schema::hasColumn('nombre')){
                $table->string('Nombre',100);
            }
            if(!Schema::hasColumn('apellido')){
                $table->string('apellido',255);
            }
            if(!Schema::hasColumn('direccion')){
                $table->string('direccion',255);
            }
            if(!Schema::hasColumn('codPostal')){
                $table->int('codPostal',11);
            }
            if(!Schema::hasColumn('numTelefono')){
                $table->int('numTelefono',11);
            }
            

                
            
        });
    }else{
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('idPoeta');
            $table->string('Nombre',100);
            $table->string('apellido',255);
            $table->string('direccion',255);
            $table->int('codPostal',11);
            $table->int('numTelefono',11);

        });

    }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('publicaciones');
        });
          DB::statement("DROP TABLE IF EXISTS poetas");
    }
}
