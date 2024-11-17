<?php

declare(strict_types=1);

namespace Lotsofpixels\DevelopmentPage\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\DB\LoggerInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\View\Element\Template\Context;
use Psr\Log\LogLevel;

class Index extends Template
{

    protected $resourceConnection;

    public $productRepository;

    protected $logger;

    public function __construct(
        ResourceConnection         $resourceConnection,
        Context                    $context,
        ProductRepositoryInterface $productRepository,
        array                      $data = []
    )
    {
        $this->productRepository = $productRepository;
        $this->resourceConnection = $resourceConnection;
        parent::__construct($context, $data);
    }

    public function getWelcomeText()
    {
        $text = 'Yes';
        return $text;
    }


}



