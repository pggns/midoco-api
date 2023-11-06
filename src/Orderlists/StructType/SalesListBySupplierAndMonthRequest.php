<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierAndMonthRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListBySupplierAndMonthRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListBySupplierCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListBySupplierCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $MidocoSalesListBySupplierCriteria = null;
    /**
     * The directDebitor
     * @var string|null
     */
    protected ?string $directDebitor = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * The excludedUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $excludedUnitName = null;
    /**
     * Constructor method for SalesListBySupplierAndMonthRequest
     * @uses SalesListBySupplierAndMonthRequest::setMidocoSalesListBySupplierCriteria()
     * @uses SalesListBySupplierAndMonthRequest::setDirectDebitor()
     * @uses SalesListBySupplierAndMonthRequest::setMaxReturned()
     * @uses SalesListBySupplierAndMonthRequest::setExcludedUnitName()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria
     * @param string $directDebitor
     * @param int $maxReturned
     * @param string[] $excludedUnitName
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria = null, ?string $directDebitor = null, ?int $maxReturned = null, ?array $excludedUnitName = null)
    {
        $this
            ->setMidocoSalesListBySupplierCriteria($midocoSalesListBySupplierCriteria)
            ->setDirectDebitor($directDebitor)
            ->setMaxReturned($maxReturned)
            ->setExcludedUnitName($excludedUnitName);
    }
    /**
     * Get MidocoSalesListBySupplierCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType|null
     */
    public function getMidocoSalesListBySupplierCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType
    {
        return $this->MidocoSalesListBySupplierCriteria;
    }
    /**
     * Set MidocoSalesListBySupplierCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest
     */
    public function setMidocoSalesListBySupplierCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria = null): self
    {
        $this->MidocoSalesListBySupplierCriteria = $midocoSalesListBySupplierCriteria;
        
        return $this;
    }
    /**
     * Get directDebitor value
     * @return string|null
     */
    public function getDirectDebitor(): ?string
    {
        return $this->directDebitor;
    }
    /**
     * Set directDebitor value
     * @param string $directDebitor
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest
     */
    public function setDirectDebitor(?string $directDebitor = null): self
    {
        // validation for constraint: string
        if (!is_null($directDebitor) && !is_string($directDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directDebitor, true), gettype($directDebitor)), __LINE__);
        }
        $this->directDebitor = $directDebitor;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
    /**
     * Get excludedUnitName value
     * @return string[]
     */
    public function getExcludedUnitName(): ?array
    {
        return $this->excludedUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExcludedUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludedUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludedUnitNameForArrayConstraintFromSetExcludedUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierAndMonthRequestExcludedUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($salesListBySupplierAndMonthRequestExcludedUnitNameItem)) {
                $invalidValues[] = is_object($salesListBySupplierAndMonthRequestExcludedUnitNameItem) ? get_class($salesListBySupplierAndMonthRequestExcludedUnitNameItem) : sprintf('%s(%s)', gettype($salesListBySupplierAndMonthRequestExcludedUnitNameItem), var_export($salesListBySupplierAndMonthRequestExcludedUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The excludedUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set excludedUnitName value
     * @throws InvalidArgumentException
     * @param string[] $excludedUnitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest
     */
    public function setExcludedUnitName(?array $excludedUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($excludedUnitNameArrayErrorMessage = self::validateExcludedUnitNameForArrayConstraintFromSetExcludedUnitName($excludedUnitName))) {
            throw new InvalidArgumentException($excludedUnitNameArrayErrorMessage, __LINE__);
        }
        $this->excludedUnitName = $excludedUnitName;
        
        return $this;
    }
    /**
     * Add item to excludedUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest
     */
    public function addToExcludedUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The excludedUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->excludedUnitName[] = $item;
        
        return $this;
    }
}
