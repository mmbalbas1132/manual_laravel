<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('productos', function (Blueprint $table) {
        $table->renameColumn('id', 'producto_id');
        $table->text('descripcion')->after('nombre');
        $table->integer('stock')->after('precio');
        $table->text('imagen')->after('stock');
        $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
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
        $table->renameColumn('producto_id', 'id');
        $table->dropColumn('descripcion');
        $table->dropColumn('stock');
        $table->dropColumn('imagen');
        $table->dropForeign('productos_categoria_id_foreign');
    });
}
}
