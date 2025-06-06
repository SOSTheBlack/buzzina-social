<?php

use App\Models\Enums\RaffleCategoryStatusEnum;
use Database\Seeders\RaffleCategorySeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('raffle_categories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('status', RaffleCategoryStatusEnum::values())->default(RaffleCategoryStatusEnum::Active);

            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', ['--class' => RaffleCategorySeeder::class]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raffle_categories');
    }
};
