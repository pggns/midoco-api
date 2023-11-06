<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTourOperatorInfosRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTourOperatorInfosRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * The metaData
     * @var string|null
     */
    protected ?string $metaData = null;
    /**
     * Constructor method for SearchTourOperatorInfosRequest
     * @uses SearchTourOperatorInfosRequest::setMidocoTourOperator()
     * @uses SearchTourOperatorInfosRequest::setMetaData()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator
     * @param string $metaData
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator = null, ?string $metaData = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator)
            ->setMetaData($metaData);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchTourOperatorInfosRequest
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Get metaData value
     * @return string|null
     */
    public function getMetaData(): ?string
    {
        return $this->metaData;
    }
    /**
     * Set metaData value
     * @param string $metaData
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchTourOperatorInfosRequest
     */
    public function setMetaData(?string $metaData = null): self
    {
        // validation for constraint: string
        if (!is_null($metaData) && !is_string($metaData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metaData, true), gettype($metaData)), __LINE__);
        }
        $this->metaData = $metaData;
        
        return $this;
    }
}
