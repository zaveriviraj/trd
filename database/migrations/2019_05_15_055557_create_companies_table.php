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
            $table->unsignedBigInteger('priority_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('companysize_id');
            $table->text('promotions')->nullable();
            $table->text('brands')->nullable();
            $table->string('rapnet')->nullable();
            $table->string('gia')->nullable();
            $table->string('auctions')->nullable();
            $table->string('raplab')->nullable();
            $table->string('advt')->nullable();
            $table->string('contact_name_1')->nullable();
            $table->string('contact_name_2')->nullable();
            $table->string('contact_name_3')->nullable();
            $table->string('contact_name_4')->nullable();
            $table->string('contact_title_1')->nullable();
            $table->string('contact_title_2')->nullable();
            $table->string('contact_title_3')->nullable();
            $table->string('contact_title_4')->nullable();
            $table->string('contact_email_1')->nullable();
            $table->string('contact_email_2')->nullable();
            $table->string('contact_email_3')->nullable();
            $table->string('contact_email_4')->nullable();
            $table->string('contact_mobile_1')->nullable();
            $table->string('contact_mobile_2')->nullable();
            $table->string('contact_mobile_3')->nullable();
            $table->string('contact_mobile_4')->nullable();
            $table->string('contact_designation_1')->nullable();
            $table->string('contact_designation_2')->nullable();
            $table->string('contact_designation_3')->nullable();
            $table->string('contact_designation_4')->nullable();
            $table->text('contact_comments')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->unsignedBigInteger('state_id');
            $table->string('rough')->nullable();
            $table->boolean('sight_holder')->default(0);
            $table->string('sight_details')->nullable();
            $table->string('tender_details')->nullable();
            $table->string('rough_deals')->nullable();
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
