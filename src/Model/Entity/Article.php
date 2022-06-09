<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property string|null $body
 * @property int|null $user_id
 * @property int|null $lid_id
 * @property int|null $package_id
 * @property int|null $tag_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lid $lid
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\Tag $tag
 * @property \App\Model\Entity\Foto[] $fotos
 */
class Article extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'number' => true,
        'body' => true,
        'user_id' => true,
        'lid_id' => true,
        'package_id' => true,
        'tag_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'lid' => true,
        'package' => true,
        'tag' => true,
        'fotos' => true,
    ];
}
