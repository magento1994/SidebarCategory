<?php
namespace Biren\SideCat\Block;

class CategorisCollection extends \Magento\Framework\View\Element\Template
{

    protected $topMenu;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Theme\Block\Html\Topmenu $topMenu
    ) {

        $this->topMenu = $topMenu;
        parent::__construct($context);
    }

    public function getHtml()
    {
        return $this->topMenu->getHtml();
    }

}
