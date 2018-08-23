<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cidades Model
 *
 * @property \App\Model\Table\EmpresaTable|\Cake\ORM\Association\HasMany $Empresa
 *
 * @method \App\Model\Entity\Cidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cidade|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cidade findOrCreate($search, callable $callback = null, $options = [])
 */
class CidadesTable extends Table
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

        $this->setTable('cidades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Empresa', [
            'foreignKey' => 'cidade_id'
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
            ->integer('id_estado')
            ->requirePresence('id_estado', 'create')
            ->notEmpty('id_estado');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 60)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->boolean('capital')
            ->requirePresence('capital', 'create')
            ->notEmpty('capital');

        return $validator;
    }
    
    public function findByUf(Query $query, array $options){
        $cidades = $this->find()
                        ->select(['Cidades.id', 'Cidades.id_estado', 'Cidades.nome', 'Cidades.capital', 'uf.sigla'])
                        ->join(['table' => 'estados',
                                'alias' => 'uf',
                                'type'  => 'inner',
                                'conditions' => 'uf.id = Cidades.id_estado']);
        
        if (!empty($options['uf'])){
            $cidades->where(['Cidades.id_estado = ' => $options['uf'][0]]);
        }
        
        $cidades->order(['Cidades.capital' => 'DESC',
                         'Cidades.nome'    => 'ASC']);
        return $cidades->toList();
    }
}
