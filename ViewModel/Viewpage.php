<?php

declare(strict_types=1);

namespace Lotsofpixels\DevelopmentPage\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Viewpage implements ArgumentInterface
{
    public function getViewmodel()
    {
        return 'Yes';
    }
}