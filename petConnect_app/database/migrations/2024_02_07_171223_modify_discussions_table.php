<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('messages', 'discussions');

        Schema::table('discussions', function (Blueprint $table) {
            // Supprimer les colonnes existantes
            $table->dropColumn(['content', 'sent_at', 'status']);

            // Ajouter le tableau JSON pour stocker la discussion
            $table->json('discussion')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discussions', function (Blueprint $table) {
            // Supprimer le tableau JSON
            $table->dropColumn('discussion');

            // Ajouter les colonnes supprimées
            $table->text('content');
            $table->timestamp('sent_at')->default(now());
            $table->string('status')->default('sent');
        });

        Schema::rename('discussions', 'messages');
    }
};
