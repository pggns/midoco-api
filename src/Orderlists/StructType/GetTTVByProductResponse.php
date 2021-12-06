<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTTVByProductResponse StructType
 * @subpackage Structs
 */
class GetTTVByProductResponse extends AbstractStructBase
{
    /**
     * The MidocoTTVOutput
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTTVOutput
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput[]
     */
    protected ?array $MidocoTTVOutput = null;
    /**
     * The sumTTV
     * @var float|null
     */
    protected ?float $sumTTV = null;
    /**
     * The sumPersoncount
     * @var int|null
     */
    protected ?int $sumPersoncount = null;
    /**
     * Constructor method for GetTTVByProductResponse
     * @uses GetTTVByProductResponse::setMidocoTTVOutput()
     * @uses GetTTVByProductResponse::setSumTTV()
     * @uses GetTTVByProductResponse::setSumPersoncount()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput[] $midocoTTVOutput
     * @param float $sumTTV
     * @param int $sumPersoncount
     */
    public function __construct(?array $midocoTTVOutput = null, ?float $sumTTV = null, ?int $sumPersoncount = null)
    {
        $this
            ->setMidocoTTVOutput($midocoTTVOutput)
            ->setSumTTV($sumTTV)
            ->setSumPersoncount($sumPersoncount);
    }
    /**
     * Get MidocoTTVOutput value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput[]
     */
    public function getMidocoTTVOutput(): ?array
    {
        return $this->MidocoTTVOutput;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTTVOutput method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTTVOutput method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTTVOutputForArrayConstraintsFromSetMidocoTTVOutput(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTTVByProductResponseMidocoTTVOutputItem) {
            // validation for constraint: itemType
            if (!$getTTVByProductResponseMidocoTTVOutputItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput) {
                $invalidValues[] = is_object($getTTVByProductResponseMidocoTTVOutputItem) ? get_class($getTTVByProductResponseMidocoTTVOutputItem) : sprintf('%s(%s)', gettype($getTTVByProductResponseMidocoTTVOutputItem), var_export($getTTVByProductResponseMidocoTTVOutputItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTTVOutput property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTTVOutput value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput[] $midocoTTVOutput
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTTVByProductResponse
     */
    public function setMidocoTTVOutput(?array $midocoTTVOutput = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTTVOutputArrayErrorMessage = self::validateMidocoTTVOutputForArrayConstraintsFromSetMidocoTTVOutput($midocoTTVOutput))) {
            throw new InvalidArgumentException($midocoTTVOutputArrayErrorMessage, __LINE__);
        }
        $this->MidocoTTVOutput = $midocoTTVOutput;
        
        return $this;
    }
    /**
     * Add item to MidocoTTVOutput value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTTVByProductResponse
     */
    public function addToMidocoTTVOutput(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput) {
            throw new InvalidArgumentException(sprintf('The MidocoTTVOutput property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTTVOutput[] = $item;
        
        return $this;
    }
    /**
     * Get sumTTV value
     * @return float|null
     */
    public function getSumTTV(): ?float
    {
        return $this->sumTTV;
    }
    /**
     * Set sumTTV value
     * @param float $sumTTV
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTTVByProductResponse
     */
    public function setSumTTV(?float $sumTTV = null): self
    {
        // validation for constraint: float
        if (!is_null($sumTTV) && !(is_float($sumTTV) || is_numeric($sumTTV))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumTTV, true), gettype($sumTTV)), __LINE__);
        }
        $this->sumTTV = $sumTTV;
        
        return $this;
    }
    /**
     * Get sumPersoncount value
     * @return int|null
     */
    public function getSumPersoncount(): ?int
    {
        return $this->sumPersoncount;
    }
    /**
     * Set sumPersoncount value
     * @param int $sumPersoncount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTTVByProductResponse
     */
    public function setSumPersoncount(?int $sumPersoncount = null): self
    {
        // validation for constraint: int
        if (!is_null($sumPersoncount) && !(is_int($sumPersoncount) || ctype_digit($sumPersoncount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sumPersoncount, true), gettype($sumPersoncount)), __LINE__);
        }
        $this->sumPersoncount = $sumPersoncount;
        
        return $this;
    }
}
