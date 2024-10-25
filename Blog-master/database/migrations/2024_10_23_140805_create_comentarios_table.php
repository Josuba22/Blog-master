<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->longText('conteudo');
            $table->date('data_comentario');
            $table->timestamp('create_at');
            $table->timestamp('update_at');
            $table->timestamps();

            //relacionamentos:
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('postagems_id')->constrained('postagems')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
