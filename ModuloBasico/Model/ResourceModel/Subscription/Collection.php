<?php

namespace Marcgento\ModuloBasico\Model\ResourceModel\Subscription;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Marcgento\ModuloBasico\Model\Subscription', 'Marcgento\ModuloBasico\Model\ResourceModel\Subscription');
	}

}
