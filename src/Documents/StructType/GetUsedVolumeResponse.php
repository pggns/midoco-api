<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsedVolumeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsedVolumeResponse extends AbstractStructBase
{
    /**
     * The MidocoUsedVolume
     * Meta information extracted from the WSDL
     * - ref: MidocoUsedVolume
     * @var \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $MidocoUsedVolume = null;
    /**
     * Constructor method for GetUsedVolumeResponse
     * @uses GetUsedVolumeResponse::setMidocoUsedVolume()
     * @param \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $midocoUsedVolume
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $midocoUsedVolume = null)
    {
        $this
            ->setMidocoUsedVolume($midocoUsedVolume);
    }
    /**
     * Get MidocoUsedVolume value
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO|null
     */
    public function getMidocoUsedVolume(): ?\Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
    {
        return $this->MidocoUsedVolume;
    }
    /**
     * Set MidocoUsedVolume value
     * @param \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $midocoUsedVolume
     * @return \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeResponse
     */
    public function setMidocoUsedVolume(?\Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $midocoUsedVolume = null): self
    {
        $this->MidocoUsedVolume = $midocoUsedVolume;
        
        return $this;
    }
}
