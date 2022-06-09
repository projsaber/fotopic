<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FotosFixture
 */
class FotosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'article_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'path' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
