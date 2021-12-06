<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsedVolumeResponse StructType
 * @subpackage Structs
 */
class GetUsedVolumeResponse extends AbstractStructBase
{
    /**
     * The MidocoUsedVolume
     * Meta information extracted from the WSDL
     * - ref: MidocoUsedVolume
     * @var \Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO $MidocoUsedVolume = null;
    /**
     * Constructor method for GetUsedVolumeResponse
     * @uses GetUsedVolumeResponse::setMidocoUsedVolume()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO $midocoUsedVolume
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO $midocoUsedVolume = null)
    {
        $this
            ->setMidocoUsedVolume($midocoUsedVolume);
    }
    /**
     * Get MidocoUsedVolume value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO|null
     */
    public function getMidocoUsedVolume(): ?\Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO
    {
        return $this->MidocoUsedVolume;
    }
    /**
     * Set MidocoUsedVolume value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO $midocoUsedVolume
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetUsedVolumeResponse
     */
    public function setMidocoUsedVolume(?\Pggns\MidocoApi\Api\Documents\StructType\UsedVolumeDTO $midocoUsedVolume = null): self
    {
        $this->MidocoUsedVolume = $midocoUsedVolume;
        
        return $this;
    }
}
