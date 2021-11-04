<?php

use Illuminate\Database\Seeder;
use Butler\Service\Models\Consumer;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        if (app()->isLocal()) {
            $this->seedDeveloperConsumer();
        }
    }

    private function seedDeveloperConsumer(): void
    {
        Consumer::firstOrCreate(['name' => 'developer'])
            ->tokens()
            ->firstOrCreate([
                'token' => hash('sha256', 'secret'),
                'abilities' => ['*'],
            ]);
    }
}
