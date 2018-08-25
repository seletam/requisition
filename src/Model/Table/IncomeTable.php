<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Income Model
 *
 * @property \App\Model\Table\AccountTypesTable|\Cake\ORM\Association\BelongsTo $AccountTypes
 * @property |\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \App\Model\Entity\Income get($primaryKey, $options = [])
 * @method \App\Model\Entity\Income newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Income[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Income|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Income[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Income findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IncomeTable extends Table
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

        $this->setTable('income');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AccountTypes', [
            'foreignKey' => 'income_type_id'
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'services_id'
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
            ->numeric('Amount')
            ->allowEmpty('Amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['income_type_id'], 'AccountTypes'));
        $rules->add($rules->existsIn(['services_id'], 'Services'));

        return $rules;
    }
}
