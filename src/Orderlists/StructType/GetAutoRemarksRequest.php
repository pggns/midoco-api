<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoRemarksRequest StructType
 * @subpackage Structs
 */
class GetAutoRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $MidocoSupplierAutoRemark = null;
    /**
     * The ignoreCultureId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreCultureId = null;
    /**
     * Constructor method for GetAutoRemarksRequest
     * @uses GetAutoRemarksRequest::setMidocoSupplierAutoRemark()
     * @uses GetAutoRemarksRequest::setIgnoreCultureId()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @param bool $ignoreCultureId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null, ?bool $ignoreCultureId = false)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark)
            ->setIgnoreCultureId($ignoreCultureId);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO|null
     */
    public function getMidocoSupplierAutoRemark(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAutoRemarksRequest
     */
    public function setMidocoSupplierAutoRemark(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null): self
    {
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAutoRemarksRequest
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
