<?php

return new class extends \PhpClickHouseLaravel\Migration {
    public function up(): void
    {
        static::write(
            'CREATE TABLE default.log_visits (
                id UInt32,
                userId UInt32,
                visitDate DateTime,
                pageURL String,
                pageType String
            )
            ENGINE = MergeTree()
            ORDER BY (id)'
        );
    }

    public function down(): void
    {
        static::write('DROP TABLE default.log_visits');
    }
};
