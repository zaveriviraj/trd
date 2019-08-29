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
            $table->string('rapnet')->nullable();
            $table->string('company_name')->index();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('companysize_id')->nullable();
            $table->boolean('sight_holder')->default(0);
            $table->string('deals_size')->nullable();
            $table->float('deals_size_from')->nullable();
            $table->float('deals_size_to')->nullable();
            $table->string('deals_color')->nullable();
            $table->string('deals_color_from')->nullable();
            $table->string('deals_color_to')->nullable();
            $table->string('deals_clarity')->nullable();
            $table->string('deals_clarity_from')->nullable();
            $table->string('deals_clarity_to')->nullable();
            $table->string('deals_make')->nullable();
            $table->string('deals_make_from')->nullable();
            $table->string('deals_make_to')->nullable();
            $table->text('manufacturing_units')->nullable();
            $table->text('branches')->nullable();
            $table->text('comments')->nullable();
            $table->text('website_comments')->nullable();
            $table->text('exhibiting_markets')->nullable();
            $table->boolean('jewellery_manufacturing')->default(0);
            $table->boolean('jewellery_trading')->default(0);
            $table->integer('relationship')->nullable();
            $table->text('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('cell_numbers')->nullable();
            $table->string('emails')->nullable();
            $table->string('office')->nullable();
            $table->string('phones')->nullable();
            $table->string('fax')->nullable();
            $table->string('other_landlines')->nullable();
            $table->string('other_mobiles')->nullable();
            $table->string('other_emails')->nullable();
            $table->text('jewelry_locations')->nullable();
            
            $table->string('gia')->nullable();
            $table->string('raplab')->nullable();
            $table->string('advt')->nullable();

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
