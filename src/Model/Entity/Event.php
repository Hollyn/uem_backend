<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $location
 * @property \Cake\I18n\FrozenDate|null $date
 * @property \Cake\I18n\FrozenTime|null $startTime
 * @property \Cake\I18n\FrozenTime|null $endTime
 * @property int|null $photo_id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Engagement[] $engagements
 * @property \App\Model\Entity\Like[] $likes
 */
class Event extends Entity
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
        'title' => true,
        'description' => true,
        'location' => true,
        'date' => true,
        'startTime' => true,
        'endTime' => true,
        'photo_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'photo' => true,
        'user' => true,
        'comments' => true,
        'engagements' => true,
        'likes' => true
    ];
}
