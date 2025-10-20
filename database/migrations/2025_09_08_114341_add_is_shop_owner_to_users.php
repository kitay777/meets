<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::table('users', function (Blueprint $t) {
      $t->boolean('is_shop_owner')->default(false)->after('is_admin');
    });
  }
  public function down(): void {
    Schema::table('users', function (Blueprint $t) { $t->dropColumn('is_shop_owner'); });
  }
};
