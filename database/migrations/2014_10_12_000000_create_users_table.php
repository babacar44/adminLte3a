<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_superadmin')->default(false);
            $table->string('nom');
            $table->string('matricule')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profil');
            $table->string('matricule_validateur')->nullable();
            $table->string('departement')->nullable();
            $table->string('pays')->unique();;
            $table->string('statut')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
