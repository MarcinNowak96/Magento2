<?php
namespace SimpleField\HelloModule\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use SimpleField\HelloModule\Model\Data;

class HelloWorld extends Action
{
    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
//        $collection = $this->model->getCollection();
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
