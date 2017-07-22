<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //タグマスタテーブル
        Schema::create('ms_tags', function (Blueprint $table) {
            $table->increments('id')->comment('管理ID');
            $table->string('name',20)->comment('タグ名');
            $table->integer('created_user_id')->comment('作成者')->nullable();
            $table->integer('updated_user_id')->comment('更新者')->nullable();
            $table->timestamp('created_at')->comment('作成日時')->nullable();
            $table->timestamp('updated_at')->comment('更新日時')->nullable();
            $table->timestamp('deleted_at')->comment('削除日時')->nullable();
            });

        //記事タグテーブル
        Schema::create('article_tags', function (Blueprint $table) {
            $table->increments('id')->comment('管理ID');
            $table->integer('article_id')->comment('記事ID');
            $table->integer('tag_id')->comment('タグID');
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
        Schema::dropIfExists('ms_tags');
        Schema::dropIfExists('article_tags');
    }
}
