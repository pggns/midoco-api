<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgedDebtorCreditorReportsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgedDebtorCreditorReportsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgedDebtorCreditorReportsPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoAgedDebtorCreditorReportsPosition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition[]
     */
    protected ?array $MidocoAgedDebtorCreditorReportsPosition = null;
    /**
     * The sumPositions
     * @var float|null
     */
    protected ?float $sumPositions = null;
    /**
     * Constructor method for GetAgedDebtorCreditorReportsResponse
     * @uses GetAgedDebtorCreditorReportsResponse::setMidocoAgedDebtorCreditorReportsPosition()
     * @uses GetAgedDebtorCreditorReportsResponse::setSumPositions()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition[] $midocoAgedDebtorCreditorReportsPosition
     * @param float $sumPositions
     */
    public function __construct(?array $midocoAgedDebtorCreditorReportsPosition = null, ?float $sumPositions = null)
    {
        $this
            ->setMidocoAgedDebtorCreditorReportsPosition($midocoAgedDebtorCreditorReportsPosition)
            ->setSumPositions($sumPositions);
    }
    /**
     * Get MidocoAgedDebtorCreditorReportsPosition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition[]
     */
    public function getMidocoAgedDebtorCreditorReportsPosition(): ?array
    {
        return $this->MidocoAgedDebtorCreditorReportsPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgedDebtorCreditorReportsPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgedDebtorCreditorReportsPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgedDebtorCreditorReportsPositionForArrayConstraintFromSetMidocoAgedDebtorCreditorReportsPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem) {
            // validation for constraint: itemType
            if (!$getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition) {
                $invalidValues[] = is_object($getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem) ? get_class($getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem) : sprintf('%s(%s)', gettype($getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem), var_export($getAgedDebtorCreditorReportsResponseMidocoAgedDebtorCreditorReportsPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgedDebtorCreditorReportsPosition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgedDebtorCreditorReportsPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition[] $midocoAgedDebtorCreditorReportsPosition
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsResponse
     */
    public function setMidocoAgedDebtorCreditorReportsPosition(?array $midocoAgedDebtorCreditorReportsPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgedDebtorCreditorReportsPositionArrayErrorMessage = self::validateMidocoAgedDebtorCreditorReportsPositionForArrayConstraintFromSetMidocoAgedDebtorCreditorReportsPosition($midocoAgedDebtorCreditorReportsPosition))) {
            throw new InvalidArgumentException($midocoAgedDebtorCreditorReportsPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgedDebtorCreditorReportsPosition = $midocoAgedDebtorCreditorReportsPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoAgedDebtorCreditorReportsPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsResponse
     */
    public function addToMidocoAgedDebtorCreditorReportsPosition(\Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoAgedDebtorCreditorReportsPosition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgedDebtorCreditorReportsPosition[] = $item;
        
        return $this;
    }
    /**
     * Get sumPositions value
     * @return float|null
     */
    public function getSumPositions(): ?float
    {
        return $this->sumPositions;
    }
    /**
     * Set sumPositions value
     * @param float $sumPositions
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsResponse
     */
    public function setSumPositions(?float $sumPositions = null): self
    {
        // validation for constraint: float
        if (!is_null($sumPositions) && !(is_float($sumPositions) || is_numeric($sumPositions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumPositions, true), gettype($sumPositions)), __LINE__);
        }
        $this->sumPositions = $sumPositions;
        
        return $this;
    }
}
