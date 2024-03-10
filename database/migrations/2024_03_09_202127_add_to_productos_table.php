<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->string('codigo', 20)->unique()->change();
            $table->text('descripcion')->nullable()->change();
            //$this->addSql('ALTER TABLE productos MODIFY codigo VARCHAR(20) NOT NULL');
            //$this->addSql('ALTER TABLE productos ADD UNIQUE (codigo)');
            //$this->addSql('ALTER TABLE productos MODIFY descripcion VARCHAR(255) NULL');

            $table->after('existencia', function($table){
                $table->foreignId('categoria_id')
                  ->constrained('categorias')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            });
            
            //$table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_categoria_id_foreign');
            $table->dropColumn('categoria_id');
            $table->dropUnique('productos_codigo_unique');
            //$this->addSql('ALTER TABLE productos DROP INDEX codigo_unique');
            //$this->addSql('ALTER TABLE productos MODIFY codigo VARCHAR(250)');
            //$this->addSql('ALTER TABLE productos MODIFY descripcion TINYTEXT');
        });
    }
};
