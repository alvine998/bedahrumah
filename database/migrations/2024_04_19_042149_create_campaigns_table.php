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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('target_fund');
            $table->string('date_end');
            $table->string('address');
            $table->string('lat');
            $table->string('long');
            $table->text('images');
            $table->string('description');
            $table->tinyInteger('status_funded');
            $table->enum('status', ['active', 'inactive', 'draft']);
            $table->json('created_by');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
};
