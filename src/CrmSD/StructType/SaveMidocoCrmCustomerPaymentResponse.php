<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoCrmCustomerPaymentResponse StructType
 * @subpackage Structs
 */
class SaveMidocoCrmCustomerPaymentResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool|null
     */
    protected ?bool $result = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveMidocoCrmCustomerPaymentResponse
     * @uses SaveMidocoCrmCustomerPaymentResponse::setResult()
     * @uses SaveMidocoCrmCustomerPaymentResponse::setInternalVersion()
     * @param bool $result
     * @param int $internalVersion
     */
    public function __construct(?bool $result = null, ?int $internalVersion = null)
    {
        $this
            ->setResult($result)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoCrmCustomerPaymentResponse
     */
    public function setResult(?bool $result = null): self
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoCrmCustomerPaymentResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
