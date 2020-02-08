<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snippets', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');

            $table->string('title');
            $table->string('slug')->unique();

            $table->longText('description')->nullable();
            $table->longText('snippet');

            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('snippets');
    }
}
