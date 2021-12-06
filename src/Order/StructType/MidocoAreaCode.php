<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAreaCode StructType
 * @subpackage Structs
 */
class MidocoAreaCode extends AreaDTO
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MidocoAreaCode
     * @uses MidocoAreaCode::setUnitName()
     * @param string $unitName
     */
    public function __construct(?string $unitName = null)
    {
        $this
            ->setUnitName($unitName);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
