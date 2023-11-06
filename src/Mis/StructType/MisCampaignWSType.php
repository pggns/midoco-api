<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignWSType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignWSType extends MisCampaignDTO
{
    /**
     * The MidocoRowMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoRowMetadata
     * @var \Pggns\MidocoApi\Mis\StructType\RowMetadataType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\RowMetadataType $MidocoRowMetadata = null;
    /**
     * Constructor method for MisCampaignWSType
     * @uses MisCampaignWSType::setMidocoRowMetadata()
     * @param \Pggns\MidocoApi\Mis\StructType\RowMetadataType $midocoRowMetadata
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\RowMetadataType $midocoRowMetadata = null)
    {
        $this
            ->setMidocoRowMetadata($midocoRowMetadata);
    }
    /**
     * Get MidocoRowMetadata value
     * @return \Pggns\MidocoApi\Mis\StructType\RowMetadataType|null
     */
    public function getMidocoRowMetadata(): ?\Pggns\MidocoApi\Mis\StructType\RowMetadataType
    {
        return $this->MidocoRowMetadata;
    }
    /**
     * Set MidocoRowMetadata value
     * @param \Pggns\MidocoApi\Mis\StructType\RowMetadataType $midocoRowMetadata
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType
     */
    public function setMidocoRowMetadata(?\Pggns\MidocoApi\Mis\StructType\RowMetadataType $midocoRowMetadata = null): self
    {
        $this->MidocoRowMetadata = $midocoRowMetadata;
        
        return $this;
    }
}
