<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnerCategoryIdToPartnersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->string('partner_category_name')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('partner_category_name');
        });
    }
}
