<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('priority_id')->nullable();
            $table->string('name');
            $table->string('owner_name')->nullable();
            $table->string('owner_designation')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('companysize_id')->nullable();
            $table->text('exhibitions')->nullable();
            $table->text('brands')->nullable();
            $table->string('rapnet')->nullable();
            $table->string('gia')->nullable();
            $table->string('auctions')->nullable();
            $table->string('raplab')->nullable();
            $table->string('advt')->nullable();
            $table->text('other_landline')->nullable();
            $table->text('other_mobile')->nullable();
            $table->text('other_email')->nullable();
            $table->text('contact_comments')->nullable();
            $table->text('deals_comments')->nullable();
            $table->text('manufacturing_units')->nullable();
            $table->text('company_comments')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('rough_details')->nullable();
            $table->string('sight_details')->nullable();
            // $table->string('tender_details')->nullable();
            $table->text('size_comments')->nullable();
            $table->text('shape_comments')->nullable();
            $table->text('color_comments')->nullable();
            $table->text('clarity_comments')->nullable();
            $table->text('cut_comments')->nullable();
            $table->text('certs_comments')->nullable();
            $table->text('branches_comments')->nullable();
            $table->text('products_comments')->nullable();
            $table->boolean('jewelry_manufacturing')->default(0);
            $table->text('jewelry_locations')->nullable();
            $table->text('jewelry_comments')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
