<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property int $id_regiao
 * @property string $estado
 * @property string $sigla
 * @property string $capital
 *
 * @property \App\Model\Entity\Veiculo[] $veiculo
 */
class Estado extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_regiao' => true,
        'estado' => true,
        'sigla' => true,
        'capital' => true,
        'veiculo' => true
    ];
}
