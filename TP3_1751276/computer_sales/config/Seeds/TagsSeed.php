<?php
use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'title' => 'Éducation',
                'created' => '2019-08-30 00:51:01',
                'modified' => '2019-08-30 14:21:53',
            ],
            [
                'id' => '2',
                'title' => 'Laval',
                'created' => '2019-08-30 00:51:10',
                'modified' => '2019-08-30 00:51:10',
            ],
            [
                'id' => '3',
                'title' => 'International',
                'created' => '2019-08-30 00:51:20',
                'modified' => '2019-08-30 00:51:20',
            ],
        ];

        $table = $this->table('tags');
        $table->insert($data)->save();
    }
}
