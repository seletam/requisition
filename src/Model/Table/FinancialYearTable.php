<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FinancialYear Model
 *
 * @method \App\Model\Entity\FinancialYear get($primaryKey, $options = [])
 * @method \App\Model\Entity\FinancialYear newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FinancialYear[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FinancialYear|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FinancialYear|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FinancialYear patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FinancialYear[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FinancialYear findOrCreate($search, callable $callback = null, $options = [])
 */
class FinancialYearTable extends Table
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

        $this->setTable('financial_year');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 10)
            ->allowEmpty('name');

        $validator
            ->date('financialyear')
            ->allowEmpty('financialyear');

        return $validator;
    }
}
