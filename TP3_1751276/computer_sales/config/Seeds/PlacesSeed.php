<?php
use Migrations\AbstractSeed;

/**
 * Places seed.
 */
class PlacesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Amazon',
            ],
            [
                'id' => '2',
                'name' => 'Best Buy',
            ],
            [
                'id' => '3',
                'name' => 'Addison Électronique',
            ],
            [
                'id' => '4',
                'name' => 'MicroBytes',
            ],
            [
                'id' => '5',
                'name' => 'Raytech Electronique Inc',
            ],
            [
                'id' => '6',
                'name' => 'Eb Electronics Direct',
            ],
            [
                'id' => '7',
                'name' => 'Club Electronique',
            ],
            [
                'id' => '8',
                'name' => 'Future shop',
            ],
            [
                'id' => '9',
                'name' => 'Ordinateurs Canada',
            ],
            [
                'id' => '10',
                'name' => 'Bureau en Gros',
            ],
        ];

        $table = $this->table('places');
        $table->insert($data)->save();
    }
}
