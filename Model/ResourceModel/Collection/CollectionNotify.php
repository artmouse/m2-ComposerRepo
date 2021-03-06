<?php

namespace Eadesigndev\ComposerRepo\Model\ResourceModel\Collection;

use Eadesigndev\ComposerRepo\Model\Packages\Notify;
use Eadesigndev\ComposerRepo\Model\ResourceModel\Packages\Notify as NotifyResource;

class CollectionNotify extends AbstractCollection
{
    /**
     * @var string
     */
    //@codingStandardsIgnoreLine
    protected $_idPackages = 'entity_id';

    /**
     * Init resource model
     * @return void
     */
    // @codingStandardsIgnoreLine
    public function _construct()
    {

        $this->_init(
            Notify::class,
            NotifyResource::class
        );

        $this->_map['composer']['entity_id'] = 'main_table.entity_id';
    }
}
