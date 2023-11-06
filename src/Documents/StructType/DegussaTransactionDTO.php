<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DegussaTransactionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DegussaTransactionDTO extends AbstractStructBase
{
    /**
     * The billingPositionId
     * @var int|null
     */
    protected ?int $billingPositionId = null;
    /**
     * The degussaExportLogId
     * @var int|null
     */
    protected ?int $degussaExportLogId = null;
    /**
     * The degussaTransactionId
     * @var int|null
     */
    protected ?int $degussaTransactionId = null;
    /**
     * Constructor method for DegussaTransactionDTO
     * @uses DegussaTransactionDTO::setBillingPositionId()
     * @uses DegussaTransactionDTO::setDegussaExportLogId()
     * @uses DegussaTransactionDTO::setDegussaTransactionId()
     * @param int $billingPositionId
     * @param int $degussaExportLogId
     * @param int $degussaTransactionId
     */
    public function __construct(?int $billingPositionId = null, ?int $degussaExportLogId = null, ?int $degussaTransactionId = null)
    {
        $this
            ->setBillingPositionId($billingPositionId)
            ->setDegussaExportLogId($degussaExportLogId)
            ->setDegussaTransactionId($degussaTransactionId);
    }
    /**
     * Get billingPositionId value
     * @return int|null
     */
    public function getBillingPositionId(): ?int
    {
        return $this->billingPositionId;
    }
    /**
     * Set billingPositionId value
     * @param int $billingPositionId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaTransactionDTO
     */
    public function setBillingPositionId(?int $billingPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingPositionId) && !(is_int($billingPositionId) || ctype_digit($billingPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingPositionId, true), gettype($billingPositionId)), __LINE__);
        }
        $this->billingPositionId = $billingPositionId;
        
        return $this;
    }
    /**
     * Get degussaExportLogId value
     * @return int|null
     */
    public function getDegussaExportLogId(): ?int
    {
        return $this->degussaExportLogId;
    }
    /**
     * Set degussaExportLogId value
     * @param int $degussaExportLogId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaTransactionDTO
     */
    public function setDegussaExportLogId(?int $degussaExportLogId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaExportLogId) && !(is_int($degussaExportLogId) || ctype_digit($degussaExportLogId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaExportLogId, true), gettype($degussaExportLogId)), __LINE__);
        }
        $this->degussaExportLogId = $degussaExportLogId;
        
        return $this;
    }
    /**
     * Get degussaTransactionId value
     * @return int|null
     */
    public function getDegussaTransactionId(): ?int
    {
        return $this->degussaTransactionId;
    }
    /**
     * Set degussaTransactionId value
     * @param int $degussaTransactionId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaTransactionDTO
     */
    public function setDegussaTransactionId(?int $degussaTransactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaTransactionId) && !(is_int($degussaTransactionId) || ctype_digit($degussaTransactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaTransactionId, true), gettype($degussaTransactionId)), __LINE__);
        }
        $this->degussaTransactionId = $degussaTransactionId;
        
        return $this;
    }
}
