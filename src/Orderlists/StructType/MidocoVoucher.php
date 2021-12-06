<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVoucher StructType
 * @subpackage Structs
 */
class MidocoVoucher extends VoucherDTO
{
    /**
     * The forCustomer
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * The fromCustomer
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * Constructor method for MidocoVoucher
     * @uses MidocoVoucher::setForCustomer()
     * @uses MidocoVoucher::setFromCustomer()
     * @param string $forCustomer
     * @param string $fromCustomer
     */
    public function __construct(?string $forCustomer = null, ?string $fromCustomer = null)
    {
        $this
            ->setForCustomer($forCustomer)
            ->setFromCustomer($fromCustomer);
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVoucher
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVoucher
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
}
