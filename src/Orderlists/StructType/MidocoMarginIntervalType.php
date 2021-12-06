<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginIntervalType StructType
 * @subpackage Structs
 */
class MidocoMarginIntervalType extends AbstractStructBase
{
    /**
     * The dbFrom
     * @var float|null
     */
    protected ?float $dbFrom = null;
    /**
     * The dbTo
     * @var float|null
     */
    protected ?float $dbTo = null;
    /**
     * The dbCategory
     * Meta information extracted from the WSDL
     * - documentation: 1 - Nur Flug 2 - Touristik 3 - Mixed
     * @var int|null
     */
    protected ?int $dbCategory = null;
    /**
     * Constructor method for MidocoMarginIntervalType
     * @uses MidocoMarginIntervalType::setDbFrom()
     * @uses MidocoMarginIntervalType::setDbTo()
     * @uses MidocoMarginIntervalType::setDbCategory()
     * @param float $dbFrom
     * @param float $dbTo
     * @param int $dbCategory
     */
    public function __construct(?float $dbFrom = null, ?float $dbTo = null, ?int $dbCategory = null)
    {
        $this
            ->setDbFrom($dbFrom)
            ->setDbTo($dbTo)
            ->setDbCategory($dbCategory);
    }
    /**
     * Get dbFrom value
     * @return float|null
     */
    public function getDbFrom(): ?float
    {
        return $this->dbFrom;
    }
    /**
     * Set dbFrom value
     * @param float $dbFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginIntervalType
     */
    public function setDbFrom(?float $dbFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($dbFrom) && !(is_float($dbFrom) || is_numeric($dbFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbFrom, true), gettype($dbFrom)), __LINE__);
        }
        $this->dbFrom = $dbFrom;
        
        return $this;
    }
    /**
     * Get dbTo value
     * @return float|null
     */
    public function getDbTo(): ?float
    {
        return $this->dbTo;
    }
    /**
     * Set dbTo value
     * @param float $dbTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginIntervalType
     */
    public function setDbTo(?float $dbTo = null): self
    {
        // validation for constraint: float
        if (!is_null($dbTo) && !(is_float($dbTo) || is_numeric($dbTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbTo, true), gettype($dbTo)), __LINE__);
        }
        $this->dbTo = $dbTo;
        
        return $this;
    }
    /**
     * Get dbCategory value
     * @return int|null
     */
    public function getDbCategory(): ?int
    {
        return $this->dbCategory;
    }
    /**
     * Set dbCategory value
     * @param int $dbCategory
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginIntervalType
     */
    public function setDbCategory(?int $dbCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($dbCategory) && !(is_int($dbCategory) || ctype_digit($dbCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbCategory, true), gettype($dbCategory)), __LINE__);
        }
        $this->dbCategory = $dbCategory;
        
        return $this;
    }
}
