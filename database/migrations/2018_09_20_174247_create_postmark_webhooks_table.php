<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostmarkWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postmark_webhooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message_id', 100);
            $table->string('record_type');
            $table->json('payload');
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
        Schema::dropIfExists('postmark_webhooks');
    }
}
