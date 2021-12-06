<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationAutoRemarksRequest StructType
 * @subpackage Structs
 */
class GetDestinationAutoRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * The ignoreCultureId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreCultureId = null;
    /**
     * Constructor method for GetDestinationAutoRemarksRequest
     * @uses GetDestinationAutoRemarksRequest::setMidocoDestinationAutoRemark()
     * @uses GetDestinationAutoRemarksRequest::setIgnoreCultureId()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @param bool $ignoreCultureId
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null, ?bool $ignoreCultureId = false)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark)
            ->setIgnoreCultureId($ignoreCultureId);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\Api\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
    /**
     * Get ignoreCultureId value
     * @return bool|null
     */
    public function getIgnoreCultureId(): ?bool
    {
        return $this->ignoreCultureId;
    }
    /**
     * Set ignoreCultureId value
     * @param bool $ignoreCultureId
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksRequest
     */
    public function setIgnoreCultureId(?bool $ignoreCultureId = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreCultureId) && !is_bool($ignoreCultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreCultureId, true), gettype($ignoreCultureId)), __LINE__);
        }
        $this->ignoreCultureId = $ignoreCultureId;
        
        return $this;
    }
}
