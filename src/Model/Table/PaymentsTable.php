<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payments Model
 *
 * @property \App\Model\Table\RequisitionsTable|\Cake\ORM\Association\BelongsToMany $Requisitions
 *
 * @method \App\Model\Entity\Payment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payment findOrCreate($search, callable $callback = null, $options = [])
 */
class PaymentsTable extends Table
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

        $this->setTable('payments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Requisitions', [
			'targetForeignKey' => 'payment_id',
			'foreignKey' => 'requistion_id',
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
            ->scalar('chequeno')
            ->maxLength('chequeno', 255)
            ->allowEmpty('chequeno');

        $validator
            ->scalar('amount')
            ->maxLength('amount', 255)
            ->allowEmpty('amount');

        $validator
            ->dateTime('chequedate')
            ->allowEmpty('chequedate');

        $validator
            ->scalar('documentnumber')
            ->maxLength('documentnumber', 255)
            ->allowEmpty('documentnumber');

        $validator
            ->scalar('narration')
            ->allowEmpty('narration');

        $validator
            ->scalar('collectedby')
            ->maxLength('collectedby', 255)
            ->allowEmpty('collectedby');

        return $validator;
    }
}
