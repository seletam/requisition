<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requisitions Model
 *
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 * @property \App\Model\Table\PaymentsTable|\Cake\ORM\Association\BelongsToMany $Payments
 *
 * @method \App\Model\Entity\Requisition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requisition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Requisition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requisition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisition|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requisition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requisition findOrCreate($search, callable $callback = null, $options = [])
 */
class RequisitionsTable extends Table
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

        $this->setTable('requisitions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Services', [
            'foreignKey' => 'service_id'
        ]);
		
        $this->belongsToMany('Payments', [
            'foreignKey' => 'requisition_id',
            'targetForeignKey' => 'payment_id',
            'joinTable' => 'requisitions_payments'
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
            ->scalar('regnumber')
            ->maxLength('regnumber', 200)
            ->allowEmpty('regnumber');

        $validator
            ->scalar('reqnumber')
            ->maxLength('reqnumber', 255)
            ->allowEmpty('reqnumber');

        $validator
            ->scalar('request')
            ->allowEmpty('request');

        $validator
            ->scalar('invoiceno')
            ->maxLength('invoiceno', 255)
            ->allowEmpty('invoiceno');

        $validator
            ->dateTime('invoicedate')
            ->allowEmpty('invoicedate');

        $validator
            ->scalar('suppliername')
            ->maxLength('suppliername', 255)
            ->allowEmpty('suppliername');

        $validator
            ->dateTime('createddate')
            ->allowEmpty('createddate');

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
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
