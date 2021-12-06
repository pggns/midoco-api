<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookMidocoVoucher4KickbackRequest StructType
 * @subpackage Structs
 */
class BookMidocoVoucher4KickbackRequest extends AbstractStructBase
{
    /**
     * The voucherCode
     * @var string|null
     */
    protected ?string $voucherCode = null;
    /**
     * The operationNumber
     * @var string|null
     */
    protected ?string $operationNumber = null;
    /**
     * Constructor method for BookMidocoVoucher4KickbackRequest
     * @uses BookMidocoVoucher4KickbackRequest::setVoucherCode()
     * @uses BookMidocoVoucher4KickbackRequest::setOperationNumber()
     * @param string $voucherCode
     * @param string $operationNumber
     */
    public function __construct(?string $voucherCode = null, ?string $operationNumber = null)
    {
        $this
            ->setVoucherCode($voucherCode)
            ->setOperationNumber($operationNumber);
    }
    /**
     * Get voucherCode value
     * @return string|null
     */
    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }
    /**
     * Set voucherCode value
     * @param string $voucherCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookMidocoVoucher4KickbackRequest
     */
    public function setVoucherCode(?string $voucherCode = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherCode) && !is_string($voucherCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherCode, true), gettype($voucherCode)), __LINE__);
        }
        $this->voucherCode = $voucherCode;
        
        return $this;
    }
    /**
     * Get operationNumber value
     * @return string|null
     */
    public function getOperationNumber(): ?string
    {
        return $this->operationNumber;
    }
    /**
     * Set operationNumber value
     * @param string $operationNumber
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookMidocoVoucher4KickbackRequest
     */
    public function setOperationNumber(?string $operationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($operationNumber) && !is_string($operationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operationNumber, true), gettype($operationNumber)), __LINE__);
        }
        $this->operationNumber = $operationNumber;
        
        return $this;
    }
}
