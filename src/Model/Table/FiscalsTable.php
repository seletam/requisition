<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fiscals Model
 *
 * @property \App\Model\Table\BudgetTable|\Cake\ORM\Association\HasMany $Budget
 *
 * @method \App\Model\Entity\Fiscal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fiscal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fiscal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fiscal|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fiscal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal findOrCreate($search, callable $callback = null, $options = [])
 */
class FiscalsTable extends Table
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

        $this->setTable('fiscals');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Budget', [
            'foreignKey' => 'fiscal_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 150)
            ->allowEmpty('name');

        $validator
            ->scalar('financialyear')
            ->allowEmpty('financialyear');

        $validator
            ->dateTime('effdate')
            ->allowEmpty('effdate');

        $validator
            ->integer('active')
            ->allowEmpty('active');

        return $validator;
    }
}
