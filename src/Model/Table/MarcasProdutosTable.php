<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MarcasProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\MarcasProduto newEmptyEntity()
 * @method \App\Model\Entity\MarcasProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MarcasProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MarcasProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\MarcasProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MarcasProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MarcasProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MarcasProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MarcasProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MarcasProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MarcasProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MarcasProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MarcasProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MarcasProdutosTable extends Table
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

        $this->setTable('marcas_produtos');
        $this->setDisplayField('nome_marca');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Produtos', [
            'foreignKey' => 'marcas_produto_id',
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
            ->scalar('nome_marca')
            ->maxLength('nome_marca', 220)
            ->allowEmptyString('nome_marca');

        return $validator;
    }
}
