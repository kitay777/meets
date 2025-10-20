<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::table('users', function (Blueprint $table) {
      $table->foreignId('shop_id')->nullable()->after('is_admin')
            ->constrained('shops')->nullOnDelete();
    });
  }
  public function down(): void {
    Schema::table('users', function (Blueprint $table) {
      $table->dropConstrainedForeignId('shop_id');
    });
  }
};
