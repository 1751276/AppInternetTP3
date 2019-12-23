<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'name' => 'ordinateur',
            ],
            [
                'id' => '2',
                'name' => 'tablette',
            ],
            [
                'id' => '4',
                'name' => 'téléphone',
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
