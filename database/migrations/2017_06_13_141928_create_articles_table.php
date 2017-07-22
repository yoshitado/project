<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //記事テーブル作成
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('管理ID');
            $table->string('title',20)->comment('タイトル');
            $table->text('content')->comment('内容');
            $table->integer('created_user_id')->comment('作成者')->nullable();
            $table->integer('updated_user_id')->comment('更新者')->nullable();
            $table->timestamp('created_at')->comment('作成日時')->nullable();
            $table->timestamp('updated_at')->comment('更新日時')->nullable();
            $table->timestamp('deleted_at')->comment('削除日時')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
