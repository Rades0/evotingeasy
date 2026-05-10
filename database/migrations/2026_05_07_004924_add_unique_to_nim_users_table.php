<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // cek apakah kolom nim ada
        if (Schema::hasColumn('users', 'nim')) {

            DB::table('users')
                ->whereNull('nim')
                ->orWhere('nim', '')
                ->update([
                    'nim' => DB::raw("CONCAT('NIM', id)")
                ]);

            Schema::table('users', function (Blueprint $table) {

                $table->unique('nim');

            });
        }
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropUnique(['nim']);

        });
    }
};