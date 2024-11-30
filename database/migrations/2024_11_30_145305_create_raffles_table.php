<?php

use App\Models\User;
use App\Models\RaffleCategory;
use App\Models\Enums\RaffleTicketTypeEnum;
use App\Models\Enums\RaffleStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(User::class)->unsigned()->constrained();
            $table->foreignIdFor(RaffleCategory::class)->unsigned()->constrained();

            $table->enum('status', RaffleStatusEnum::values())->default(RaffleStatusEnum::Inactive->value);
            $table->string('title');
            $table->integer('ticket_quantity');
            $table->float('ticket_price', 2);
            $table->enum('ticket_type', RaffleTicketTypeEnum::values());
            $table->integer('ticket_expire')->default(1);
            $table->text('description')->nullable();
            $table->text('regulation')->nullable();
            $table->integer('phone');
            $table->string('avatar')->nullable();
            $table->string('cover')->nullable();
            $table->dateTime('release_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('raffles');
    }
};
