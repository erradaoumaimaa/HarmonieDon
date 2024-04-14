<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categorie_id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('address');
            $table->enum('item_condition', ['good', 'needs repair', 'damaged', 'exclusivity'])->default('good');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('donor_availability', ['weekend', 'evening', 'flexible'])->default('flexible');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('donations');
    }
}
