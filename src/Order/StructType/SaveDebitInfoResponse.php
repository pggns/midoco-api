<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitInfoResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveDebitInfo --- updates the debit info of a billing document
 * @subpackage Structs
 */
class SaveDebitInfoResponse extends AbstractStructBase
{
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveDebitInfoResponse
     * @uses SaveDebitInfoResponse::setInternalVersion()
     * @param int $internalVersion
     */
    public function __construct(?int $internalVersion = null)
    {
        $this
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoResponse
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