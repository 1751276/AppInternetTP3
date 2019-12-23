<?php
use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
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
                'user_id' => '1',
                'name' => 'ASUS VivoBook',
                'slug' => 'first-post',
                'price' => '1234',
                'description' => 'This is the first post.',
                'published' => '1',
                'created' => '2019-08-21 20:47:19',
                'modified' => '2019-08-21 20:47:19',
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'name' => 'Acer Aspire',
                'slug' => 'second-post',
                'price' => '590',
                'description' => 'Battery life of up to 8 hours.',
                'published' => '1',
                'created' => '2019-08-21 00:00:00',
                'modified' => '2019-08-25 23:48:47',
            ],
            [
                'id' => '3',
                'user_id' => '1',
                'name' => 'ASUS ZenBook',
                'slug' => 'Other add',
                'price' => '765',
                'description' => '',
                'published' => '0',
                'created' => '2019-08-22 01:29:11',
                'modified' => '2019-08-22 01:29:47',
            ],
            [
                'id' => '4',
                'user_id' => '2',
                'name' => 'Microsoft Surface Book',
                'slug' => 'add by admin',
                'price' => '1098',
                'description' => 'Offers 4 versatile use modes.',
                'published' => '1',
                'created' => '2019-08-26 00:09:41',
                'modified' => '2019-08-26 00:09:41',
            ],
            [
                'id' => '5',
                'user_id' => '3',
                'name' => 'Dell i3583',
                'slug' => 'last post',
                'price' => '1342',
                'description' => 'Numeric keypad makes budgeting and other calculations a snap.',
                'published' => '0',
                'created' => '2019-08-30 00:53:01',
                'modified' => '2019-08-30 00:54:42',
            ],
        ];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
