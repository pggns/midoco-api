<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $MidocoMarketingKeyDescription = null;
    /**
     * Constructor method for SaveMarketingKeyDescriptionRequest
     * @uses SaveMarketingKeyDescriptionRequest::setMidocoMarketingKeyDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null)
    {
        $this
            ->setMidocoMarketingKeyDescription($midocoMarketingKeyDescription);
    }
    /**
     * Get MidocoMarketingKeyDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType|null
     */
    public function getMidocoMarketingKeyDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType
    {
        return $this->MidocoMarketingKeyDescription;
    }
    /**
     * Set MidocoMarketingKeyDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMarketingKeyDescriptionRequest
     */
    public function setMidocoMarketingKeyDescription(?\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null): self
    {
        $this->MidocoMarketingKeyDescription = $midocoMarketingKeyDescription;
        
        return $this;
    }
}
