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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('donor_name')->nullable();
            $table->string('donor_phone')->nullable();
            $table->string('donor_address')->nullable();
            $table->integer('wallet_id');
            $table->integer('campaign_id');
            $table->double('total_funded');
            $table->enum('status', ['paid', 'unpaid', 'pending']);
            $table->json('verified_by');
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
        Schema::dropIfExists('transactions');
    }
};
