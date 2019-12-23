<?php
use Migrations\AbstractSeed;

/**
 * FilesProducts seed.
 */
class FilesProductsSeed extends AbstractSeed
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
                'file_id' => '1',
            ],
            [
                'id' => '2',
                'product_id' => '5',
                'file_id' => '3',
            ],
        ];

        $table = $this->table('files_products');
        $table->insert($data)->save();
    }
}
