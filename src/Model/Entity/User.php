<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $avatar
 * @property int|null $group_id
 * @property int|null $department_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Engagement[] $engagements
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Like[] $likes
 */
class User extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'password' => true,
        'address' => true,
        'phone' => true,
        'avatar' => true,
        'group_id' => true,
        'department_id' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'department' => true,
        'comments' => true,
        'engagements' => true,
        'events' => true,
        'likes' => true,
        'sex' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];


    public function parentNode()
    {
        if (!$this->id) {
            return null;
        }
        if (isset($this->group_id)) {
            $groupId = $this->group_id;
        } else {
            $Users = TableRegistry::get('Users');
            $user = $Users->find('all', ['fields' => ['group_id']])->where(['id' => $this->id])->first();
            $groupId = $user->group_id;
        }
        if (!$groupId) {
            return null;
        }
        return ['Groups' => ['id' => $groupId]];
    }


    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }


}
