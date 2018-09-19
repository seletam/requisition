<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RequisitionsPayments Model
 *
 * @property \App\Model\Table\RequisitionsTable|\Cake\ORM\Association\BelongsTo $Requisitions
 * @property \App\Model\Table\PaymentsTable|\Cake\ORM\Association\BelongsTo $Payments
 *
 * @method \App\Model\Entity\RequisitionsPayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\RequisitionsPayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RequisitionsPayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionsPayment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RequisitionsPayment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RequisitionsPayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionsPayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionsPayment findOrCreate($search, callable $callback = null, $options = [])
 */
class RequisitionsPaymentsTable extends Table
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

        $this->setTable('requisitions_payments');

        $this->belongsTo('Requisitions', [
            'foreignKey' => 'requisition_id'
        ]);
        $this->belongsTo('Payments', [
            'foreignKey' => 'payment_id'
        ]);
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
        $rules->add($rules->existsIn(['requisition_id'], 'Requisitions'));
        $rules->add($rules->existsIn(['payment_id'], 'Payments'));

        return $rules;
    }
}
