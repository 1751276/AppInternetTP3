<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$dp8.mABBA2Sg2CTANKMCM.VGKDxC26fJ/RwM.ny.ZLKsTtAjXm3TW',
                'created' => '2019-08-21 20:47:19',
                'modified' => '2019-08-25 23:40:48',
                'id_role' => '1',
                'uuid' => '',
                'active' => '1',
            ],
            [
                'id' => '2',
                'email' => 'supervisor@gmail.com',
                'password' => '$2y$10$dp8.mABBA2Sg2CTANKMCM.VGKDxC26fJ/RwM.ny.ZLKsTtAjXm3TW',
                'created' => '2019-08-25 23:41:16',
                'modified' => '2019-08-25 23:41:16',
                'id_role' => '2',
                'uuid' => '',
                'active' => '1',
            ],
            [
                'id' => '3',
                'email' => 'employer@gmail.com',
                'password' => '$2y$10$dp8.mABBA2Sg2CTANKMCM.VGKDxC26fJ/RwM.ny.ZLKsTtAjXm3TW',
                'created' => '2019-08-30 00:34:55',
                'modified' => '2019-08-30 00:34:55',
                'id_role' => '3',
                'uuid' => '',
                'active' => '1',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
