<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompareDatastoreEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompareDatastoreEntryRequest extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName1
     * @var string|null
     */
    protected ?string $unitName1 = null;
    /**
     * The unitName2
     * @var string|null
     */
    protected ?string $unitName2 = null;
    /**
     * Constructor method for CompareDatastoreEntryRequest
     * @uses CompareDatastoreEntryRequest::setType()
     * @uses CompareDatastoreEntryRequest::setUnitName1()
     * @uses CompareDatastoreEntryRequest::setUnitName2()
     * @param string $type
     * @param string $unitName1
     * @param string $unitName2
     */
    public function __construct(?string $type = null, ?string $unitName1 = null, ?string $unitName2 = null)
    {
        $this
            ->setType($type)
            ->setUnitName1($unitName1)
            ->setUnitName2($unitName2);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CompareDatastoreEntryRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName1 value
     * @return string|null
     */
    public function getUnitName1(): ?string
    {
        return $this->unitName1;
    }
    /**
     * Set unitName1 value
     * @param string $unitName1
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CompareDatastoreEntryRequest
     */
    public function setUnitName1(?string $unitName1 = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName1) && !is_string($unitName1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName1, true), gettype($unitName1)), __LINE__);
        }
        $this->unitName1 = $unitName1;
        
        return $this;
    }
    /**
     * Get unitName2 value
     * @return string|null
     */
    public function getUnitName2(): ?string
    {
        return $this->unitName2;
    }
    /**
     * Set unitName2 value
     * @param string $unitName2
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CompareDatastoreEntryRequest
     */
    public function setUnitName2(?string $unitName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName2) && !is_string($unitName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName2, true), gettype($unitName2)), __LINE__);
        }
        $this->unitName2 = $unitName2;
        
        return $this;
    }
}
