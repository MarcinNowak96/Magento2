<?php

namespace SimpleField\HelloModule\Block\Html;

use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Template;
use SimpleField\HelloModule\Helper\Data;

class Hello extends Template
{
    protected $template = 'SimpleField_HelloModule::custom.phtml';
    protected $productCollectionFactory;
    protected $cofigData;
    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $_searchCriteriaBuilder;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        Data $cofigData,
        array $data = []
    ) {
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->cofigData = $cofigData;
        parent::__construct($context, $data);
    }
    /**
     * @return ProductInterface[]
     */
    public function getAllProducts()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        return $this->productRepository->getList($searchCriteria)->getItems();
    }
    public function getDataSet()
    {
        return $this->cofigData->getGeneralConfig();
    }

}
