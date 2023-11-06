<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompareDatastoreEntryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompareDatastoreEntryResponse extends AbstractStructBase
{
    /**
     * The equals
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $equals = null;
    /**
     * Constructor method for CompareDatastoreEntryResponse
     * @uses CompareDatastoreEntryResponse::setEquals()
     * @param bool $equals
     */
    public function __construct(?bool $equals = false)
    {
        $this
            ->setEquals($equals);
    }
    /**
     * Get equals value
     * @return bool|null
     */
    public function getEquals(): ?bool
    {
        return $this->equals;
    }
    /**
     * Set equals value
     * @param bool $equals
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CompareDatastoreEntryResponse
     */
    public function setEquals(?bool $equals = false): self
    {
        // validation for constraint: boolean
        if (!is_null($equals) && !is_bool($equals)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($equals, true), gettype($equals)), __LINE__);
        }
        $this->equals = $equals;
        
        return $this;
    }
}
