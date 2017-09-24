<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersRoles Model
 *
 * @method \App\Model\Entity\UsersRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersRolesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users_roles');
        $this->setDisplayField('id_users');
        $this->setPrimaryKey(['id_users', 'id_roles']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_users')
            ->allowEmpty('id_users', 'create');

        $validator
            ->integer('id_roles')
            ->allowEmpty('id_roles', 'create');

        return $validator;
    }
}
