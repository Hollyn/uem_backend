<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Engagement Entity
 *
 * @property int $id
 * @property bool $engagement
 * @property int $user_id
 * @property int $event_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Event $event
 */
class Engagement extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'engagement' => true,
        'user_id' => true,
        'event_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'event' => true
    ];
}
