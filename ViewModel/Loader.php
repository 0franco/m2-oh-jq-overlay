<?php
declare(strict_types=1);

namespace OH\Overlay\ViewModel;

use Magento\Framework\View\Asset\Repository;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class Loader
 * @package OH\Overlay\ViewModel
 */
class Loader implements ArgumentInterface
{
    /**
     * Asset service
     *
     * @var Repository
     */
    private Repository $assetRepo;

    public function __construct(Repository $assetRepo)
    {
        $this->assetRepo = $assetRepo;
    }

    /**
     * Get loader image url
     *
     * @return string
     */
    public function getLoaderImageUrl(): string
    {
        return $this->assetRepo->getUrlWithParams('OH_Overlay::images/eclipse.svg', ['_secure' => true]);
    }
}
