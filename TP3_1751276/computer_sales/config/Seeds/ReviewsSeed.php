<?php
use Migrations\AbstractSeed;

/**
 * Reviews seed.
 */
class ReviewsSeed extends AbstractSeed
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
                'product_id' => '4',
                'name' => 'Anne',
                'review' => 'Good computer',
                'created' => '2019-08-29 23:13:03',
                'modified' => '2019-08-29 23:13:03',
            ],
            [
                'id' => '2',
                'product_id' => '2',
                'name' => 'Alex',
                'review' => 'Bad computer',
                'created' => '2019-08-29 23:18:39',
                'modified' => '2019-08-29 23:18:39',
            ],
            [
                'id' => '3',
                'product_id' => '5',
                'name' => 'Jo',
                'review' => 'Ok computer',
                'created' => '2019-08-30 13:36:36',
                'modified' => '2019-08-30 13:36:36',
            ],
        ];

        $table = $this->table('reviews');
        $table->insert($data)->save();
    }
}
