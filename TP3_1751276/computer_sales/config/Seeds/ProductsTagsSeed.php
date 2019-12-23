<?php
use Migrations\AbstractSeed;

/**
 * ProductsTags seed.
 */
class ProductsTagsSeed extends AbstractSeed
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
                'product_id' => '5',
                'tag_id' => '2',
            ],
        ];

        $table = $this->table('products_tags');
        $table->insert($data)->save();
    }
}
