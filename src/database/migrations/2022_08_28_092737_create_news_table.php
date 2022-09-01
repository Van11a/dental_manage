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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->comment('タイトル');
            $table->text('content')->comment('本文');
            $table->date('public_start_date')->comment('公開開始日');
            $table->date('public_end_date')->comment('公開終了日');
            $table->boolean('is_display')->comment('表示フラグ');
            $table->boolean('is_deleted')->comment('削除フラグ');
            $table->string('file_path')->comment('画像ファイルパス');
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
        Schema::dropIfExists('news');
    }
};
