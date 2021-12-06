<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMarketingKeyDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveMarketingKeyDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoMarketingKeyDescription
     * @var \Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType $MidocoMarketingKeyDescription = null;
    /**
     * Constructor method for SaveMarketingKeyDescriptionRequest
     * @uses SaveMarketingKeyDescriptionRequest::setMidocoMarketingKeyDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null)
    {
        $this
            ->setMidocoMarketingKeyDescription($midocoMarketingKeyDescription);
    }
    /**
     * Get MidocoMarketingKeyDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType|null
     */
    public function getMidocoMarketingKeyDescription(): ?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType
    {
        return $this->MidocoMarketingKeyDescription;
    }
    /**
     * Set MidocoMarketingKeyDescription value
     * @param \Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMarketingKeyDescriptionRequest
     */
    public function setMidocoMarketingKeyDescription(?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null): self
    {
        $this->MidocoMarketingKeyDescription = $midocoMarketingKeyDescription;
        
        return $this;
    }
}
