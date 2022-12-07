<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \App\Model\Table\CategoriasProdutosTable&\Cake\ORM\Association\BelongsTo $CategoriasProdutos
 * @property \App\Model\Table\MarcasProdutosTable&\Cake\ORM\Association\BelongsTo $MarcasProdutos
 * @property \App\Model\Table\FornecedoresProdutosTable&\Cake\ORM\Association\BelongsTo $FornecedoresProdutos
 * @property \App\Model\Table\QuantidadesProdutosTable&\Cake\ORM\Association\BelongsTo $QuantidadesProdutos
 * @property \App\Model\Table\ValoresProdutosTable&\Cake\ORM\Association\BelongsTo $ValoresProdutos
 *
 * @method \App\Model\Entity\Produto newEmptyEntity()
 * @method \App\Model\Entity\Produto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProdutosTable extends Table
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

        $this->setTable('produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CategoriasProdutos', [
            'foreignKey' => 'categorias_produto_id',
        ]);
        $this->belongsTo('MarcasProdutos', [
            'foreignKey' => 'marcas_produto_id',
        ]);
        $this->belongsTo('FornecedoresProdutos', [
            'foreignKey' => 'fornecedores_produto_id',
        ]);
        $this->belongsTo('QuantidadesProdutos', [
            'foreignKey' => 'quantidades_produto_id',
        ]);
        $this->belongsTo('ValoresProdutos', [
            'foreignKey' => 'valores_produto_id',
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
            ->scalar('nome_produto')
            ->maxLength('nome_produto', 220)
            ->allowEmptyString('nome_produto');

        $validator
            ->integer('categorias_produto_id')
            ->allowEmptyString('categorias_produto_id');

        $validator
            ->integer('marcas_produto_id')
            ->allowEmptyString('marcas_produto_id');

        $validator
            ->integer('fornecedores_produto_id')
            ->allowEmptyString('fornecedores_produto_id');

        $validator
            ->integer('quantidades_produto_id')
            ->allowEmptyString('quantidades_produto_id');

        $validator
            ->integer('valores_produto_id')
            ->allowEmptyString('valores_produto_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('categorias_produto_id', 'CategoriasProdutos'), ['errorField' => 'categorias_produto_id']);
        $rules->add($rules->existsIn('marcas_produto_id', 'MarcasProdutos'), ['errorField' => 'marcas_produto_id']);
        $rules->add($rules->existsIn('fornecedores_produto_id', 'FornecedoresProdutos'), ['errorField' => 'fornecedores_produto_id']);
        $rules->add($rules->existsIn('quantidades_produto_id', 'QuantidadesProdutos'), ['errorField' => 'quantidades_produto_id']);
        $rules->add($rules->existsIn('valores_produto_id', 'ValoresProdutos'), ['errorField' => 'valores_produto_id']);

        return $rules;
    }
}
