<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('conversions', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('customer_id');
      $table->unsignedInteger('revenue');
      $table->string('booking_reference');
      $table->date('date_of_contact');
      $table->string('platform');
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
    Schema::dropIfExists('conversions');
  }
}
