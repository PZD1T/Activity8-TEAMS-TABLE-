<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'conference_id' => 1,
            'Division' => 'AFC North',
            ],
            [
            'conference_id' => 1,
            'Division' => 'AFC South',
            ],
            [
                'conference_id' => 1,
            'Division' => 'AFC East',
            ],
            [
                'conference_id' => 1,
            'Division' => 'AFC West',
            ],
                [
                    'conference_id' => 2,
                'Division' => 'NFC North',
                ],
                [
                    'conference_id' => 2,
                'Division' => 'NFC South',
                ],
                [
                    'conference_id' => 2,
                'Division' => 'NFC East',
                ],
                [
                    'conference_id' => 2,
                'Division' => 'NFC West',
                ]
        ];
        DB::table('divisions')->insert($data);
    }
}
