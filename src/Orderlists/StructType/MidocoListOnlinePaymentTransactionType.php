<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoListOnlinePaymentTransactionType StructType
 * @subpackage Structs
 */
class MidocoListOnlinePaymentTransactionType extends OnlinePaymentTransactionDTO
{
    /**
     * The adapter
     * @var string|null
     */
    protected ?string $adapter = null;
    /**
     * Constructor method for MidocoListOnlinePaymentTransactionType
     * @uses MidocoListOnlinePaymentTransactionType::setAdapter()
     * @param string $adapter
     */
    public function __construct(?string $adapter = null)
    {
        $this
            ->setAdapter($adapter);
    }
    /**
     * Get adapter value
     * @return string|null
     */
    public function getAdapter(): ?string
    {
        return $this->adapter;
    }
    /**
     * Set adapter value
     * @param string $adapter
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoListOnlinePaymentTransactionType
     */
    public function setAdapter(?string $adapter = null): self
    {
        // validation for constraint: string
        if (!is_null($adapter) && !is_string($adapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapter, true), gettype($adapter)), __LINE__);
        }
        $this->adapter = $adapter;
        
        return $this;
    }
}
