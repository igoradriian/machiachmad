<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            if (!Schema::hasColumn('galleries', 'specialty')) {
                $table->string('specialty')->nullable()->after('lawyer_name');
            }
            if (!Schema::hasColumn('galleries', 'experience')) {
                $table->string('experience')->nullable()->after('specialty');
            }
            // Jangan drop description jika tidak yakin ada
            // if (Schema::hasColumn('galleries', 'description')) {
            //     $table->dropColumn('description');
            // }
        });
    }


    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->text('description')->nullable(); // Bisa dikembalikan jika rollback
            $table->dropColumn(['specialty', 'experience']);
        });
    }
};
