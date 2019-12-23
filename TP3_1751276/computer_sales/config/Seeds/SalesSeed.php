<?php
use Migrations\AbstractSeed;

/**
 * Sales seed.
 */
class SalesSeed extends AbstractSeed
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
                'category_id' => '1',
                'subcategory_id' => '1',
                'price' => '600',
            ],
        ];

        $table = $this->table('sales');
        $table->insert($data)->save();
    }
}
