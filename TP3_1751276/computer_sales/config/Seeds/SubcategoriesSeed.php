<?php
use Migrations\AbstractSeed;

/**
 * Subcategories seed.
 */
class SubcategoriesSeed extends AbstractSeed
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
                'name' => 'Dell Latitude 3190 Laptop',
            ],
            [
                'id' => '2',
                'category_id' => '1',
                'name' => 'Surface Book 2',
            ],
            [
                'id' => '3',
                'category_id' => '1',
                'name' => 'HP Pavilion All-in-One PC',
            ],
            [
                'id' => '4',
                'category_id' => '1',
                'name' => 'Surface Go for Business',
            ],
            [
                'id' => '5',
                'category_id' => '2',
                'name' => 'Pixel Slate 8th Gen',
            ],
            [
                'id' => '6',
                'category_id' => '2',
                'name' => 'Amazon Fire 7 Tablet',
            ],
            [
                'id' => '7',
                'category_id' => '2',
                'name' => 'Huawei MediaPad T3',
            ],
            [
                'id' => '8',
                'category_id' => '4',
                'name' => 'Google Pixel 3a',
            ],
            [
                'id' => '9',
                'category_id' => '4',
                'name' => 'Apple iPhone XR',
            ],
            [
                'id' => '10',
                'category_id' => '4',
                'name' => 'Samsung Galaxy S10 Plus',
            ],
        ];

        $table = $this->table('subcategories');
        $table->insert($data)->save();
    }
}
