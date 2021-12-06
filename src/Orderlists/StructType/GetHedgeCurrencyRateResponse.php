<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHedgeCurrencyRateResponse StructType
 * @subpackage Structs
 */
class GetHedgeCurrencyRateResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRateHedge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCurrencyRateHedge
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO[]
     */
    protected ?array $MidocoCurrencyRateHedge = null;
    /**
     * Constructor method for GetHedgeCurrencyRateResponse
     * @uses GetHedgeCurrencyRateResponse::setMidocoCurrencyRateHedge()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     */
    public function __construct(?array $midocoCurrencyRateHedge = null)
    {
        $this
            ->setMidocoCurrencyRateHedge($midocoCurrencyRateHedge);
    }
    /**
     * Get MidocoCurrencyRateHedge value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO[]
     */
    public function getMidocoCurrencyRateHedge(): ?array
    {
        return $this->MidocoCurrencyRateHedge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCurrencyRateHedge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrencyRateHedge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyRateHedgeForArrayConstraintsFromSetMidocoCurrencyRateHedge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) {
            // validation for constraint: itemType
            if (!$getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO) {
                $invalidValues[] = is_object($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) ? get_class($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) : sprintf('%s(%s)', gettype($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem), var_export($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetHedgeCurrencyRateResponse
     */
    public function setMidocoCurrencyRateHedge(?array $midocoCurrencyRateHedge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyRateHedgeArrayErrorMessage = self::validateMidocoCurrencyRateHedgeForArrayConstraintsFromSetMidocoCurrencyRateHedge($midocoCurrencyRateHedge))) {
            throw new InvalidArgumentException($midocoCurrencyRateHedgeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrencyRateHedge = $midocoCurrencyRateHedge;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetHedgeCurrencyRateResponse
     */
    public function addToMidocoCurrencyRateHedge(\Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\CurrencyRateHedgeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrencyRateHedge[] = $item;
        
        return $this;
    }
}
