<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuantidadesProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\QuantidadesProduto newEmptyEntity()
 * @method \App\Model\Entity\QuantidadesProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuantidadesProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuantidadesProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuantidadesProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuantidadesProdutosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('quantidades_produtos');
        $this->setDisplayField('quantidade');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Produtos', [
            'foreignKey' => 'quantidades_produto_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('quantidade')
            ->allowEmptyString('quantidade');

        return $validator;
    }
}
