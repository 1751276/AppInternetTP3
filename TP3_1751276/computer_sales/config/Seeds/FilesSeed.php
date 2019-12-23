<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'name' => '',
                'path' => 'Files/',
                'created' => '2019-10-01 00:00:00',
                'modified' => '2019-10-15 19:38:26',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'dell.jpg',
                'path' => 'Files/',
                'created' => '2019-09-09 08:43:12',
                'modified' => '2019-09-09 08:43:12',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
