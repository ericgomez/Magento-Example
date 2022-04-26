<?php

namespace Marcgento\ModuloBasico\Model\ResourceModel;

class Subscription extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('magento_subscription', 'subscription_id');
	}

}
