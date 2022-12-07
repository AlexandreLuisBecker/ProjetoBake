<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ValoresProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\ValoresProduto newEmptyEntity()
 * @method \App\Model\Entity\ValoresProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ValoresProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ValoresProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ValoresProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ValoresProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ValoresProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ValoresProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValoresProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValoresProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValoresProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValoresProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValoresProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ValoresProdutosTable extends Table
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

        $this->setTable('valores_produtos');
        $this->setDisplayField('valor');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Produtos', [
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
            ->integer('valor')
            ->allowEmptyString('valor');

        return $validator;
    }
}
