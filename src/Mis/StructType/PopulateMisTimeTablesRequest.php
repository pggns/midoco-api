<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PopulateMisTimeTablesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PopulateMisTimeTablesRequest extends AbstractStructBase
{
    /**
     * The MisYear
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MisYear
     * @var \Pggns\MidocoApi\Mis\StructType\MisYear[]
     */
    protected ?array $MisYear = null;
    /**
     * Constructor method for PopulateMisTimeTablesRequest
     * @uses PopulateMisTimeTablesRequest::setMisYear()
     * @param \Pggns\MidocoApi\Mis\StructType\MisYear[] $misYear
     */
    public function __construct(?array $misYear = null)
    {
        $this
            ->setMisYear($misYear);
    }
    /**
     * Get MisYear value
     * @return \Pggns\MidocoApi\Mis\StructType\MisYear[]
     */
    public function getMisYear(): ?array
    {
        return $this->MisYear;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMisYear method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMisYear method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMisYearForArrayConstraintFromSetMisYear(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $populateMisTimeTablesRequestMisYearItem) {
            // validation for constraint: itemType
            if (!$populateMisTimeTablesRequestMisYearItem instanceof \Pggns\MidocoApi\Mis\StructType\MisYear) {
                $invalidValues[] = is_object($populateMisTimeTablesRequestMisYearItem) ? get_class($populateMisTimeTablesRequestMisYearItem) : sprintf('%s(%s)', gettype($populateMisTimeTablesRequestMisYearItem), var_export($populateMisTimeTablesRequestMisYearItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MisYear property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisYear, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MisYear value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisYear[] $misYear
     * @return \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesRequest
     */
    public function setMisYear(?array $misYear = null): self
    {
        // validation for constraint: array
        if ('' !== ($misYearArrayErrorMessage = self::validateMisYearForArrayConstraintFromSetMisYear($misYear))) {
            throw new InvalidArgumentException($misYearArrayErrorMessage, __LINE__);
        }
        $this->MisYear = $misYear;
        
        return $this;
    }
    /**
     * Add item to MisYear value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisYear $item
     * @return \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesRequest
     */
    public function addToMisYear(\Pggns\MidocoApi\Mis\StructType\MisYear $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisYear) {
            throw new InvalidArgumentException(sprintf('The MisYear property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisYear, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MisYear[] = $item;
        
        return $this;
    }
}
