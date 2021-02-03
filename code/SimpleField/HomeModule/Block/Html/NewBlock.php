<?php

namespace SimpleField\HomeModule\Block\Html;

use Magento\Framework\View\Element\Template;

class NewBlock extends Template
{

    /**
     * Current template name
     *
     * @var string
     */

    protected $_template = 'SimpleField_HomeModule::html/newBlock.phtml';
//    protected $cssClass;
//    protected $days;
//    public function __construct(Template\Context $context, array $data = [])
//    {
//        parent::__construct($context, $data);
//        $this->cssClass = $data['css_class'];
//        $this->days = $data['css_class_days'];
//    }
//
//    public function getCssClass()
//    {
//        return $this->cssClass;
//    }
//
//    public function getDays()
//    {
//
//        return $this->days;
//    }

    public function getKostenloser(): string
    {
        return "KOSTENLOSER VERSAND";
    }

    public function getExpress(): string
    {
        return "EXPRESSVERSAND";
    }

    public function getNumber(): string
    {
        return "MO-FR: +49938747189";
    }
}
