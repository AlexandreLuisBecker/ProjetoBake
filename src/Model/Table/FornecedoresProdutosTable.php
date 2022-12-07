<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FornecedoresProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\FornecedoresProduto newEmptyEntity()
 * @method \App\Model\Entity\FornecedoresProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FornecedoresProdutosTable extends Table
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

        $this->setTable('fornecedores_produtos');
        $this->setDisplayField('nome_fornecedor');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Produtos', [
            'foreignKey' => 'fornecedores_produto_id',
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
            ->scalar('nome_fornecedor')
            ->maxLength('nome_fornecedor', 220)
            ->allowEmptyString('nome_fornecedor');

        return $validator;
    }
}
