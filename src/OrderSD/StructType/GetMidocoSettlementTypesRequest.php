<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSettlementTypesRequest StructType
 * @subpackage Structs
 */
class GetMidocoSettlementTypesRequest extends AbstractStructBase
{
    /**
     * The MidocoSettlementType
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementType
     * @var \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $MidocoSettlementType = null;
    /**
     * The includeHidden
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeHidden = null;
    /**
     * Constructor method for GetMidocoSettlementTypesRequest
     * @uses GetMidocoSettlementTypesRequest::setMidocoSettlementType()
     * @uses GetMidocoSettlementTypesRequest::setIncludeHidden()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType
     * @param bool $includeHidden
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType = null, ?bool $includeHidden = true)
    {
        $this
            ->setMidocoSettlementType($midocoSettlementType)
            ->setIncludeHidden($includeHidden);
    }
    /**
     * Get MidocoSettlementType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO|null
     */
    public function getMidocoSettlementType(): ?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO
    {
        return $this->MidocoSettlementType;
    }
    /**
     * Set MidocoSettlementType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesRequest
     */
    public function setMidocoSettlementType(?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType = null): self
    {
        $this->MidocoSettlementType = $midocoSettlementType;
        
        return $this;
    }
    /**
     * Get includeHidden value
     * @return bool|null
     */
    public function getIncludeHidden(): ?bool
    {
        return $this->includeHidden;
    }
    /**
     * Set includeHidden value
     * @param bool $includeHidden
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesRequest
     */
    public function setIncludeHidden(?bool $includeHidden = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeHidden) && !is_bool($includeHidden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeHidden, true), gettype($includeHidden)), __LINE__);
        }
        $this->includeHidden = $includeHidden;
        
        return $this;
    }
}
