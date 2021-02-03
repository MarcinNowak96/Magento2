<?php

namespace SimpleField\HelloModule\Block\Html;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    protected $_template = 'SimpleField_HelloModule::custom.phtml';
    protected $_productCollectionFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addFieldToSelect('*');
        return $collection;
    }



}
