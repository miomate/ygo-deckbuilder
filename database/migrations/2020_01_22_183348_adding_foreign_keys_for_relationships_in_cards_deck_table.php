<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingForeignKeysForRelationshipsInCardsDeckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cards_deck', function (Blueprint $table) {
            $table->integer('card_id')->unsigned()->change(); //updates change existing table
            $table->integer('deck_id')->unsigned()->change(); //if u want to change something, create table again and change()
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('deck_id')->references('id')->on('decks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards_deck', function (Blueprint $table) {
            $table->dropForeign(['card_id']);
            $table->dropForeign(['deck_id']);
        });
    }
}
