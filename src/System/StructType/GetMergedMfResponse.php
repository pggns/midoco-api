<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMfResponse StructType
 * @subpackage Structs
 */
class GetMergedMfResponse extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\System\StructType\MidocoMf[]
     */
    protected ?array $MidocoMf = null;
    /**
     * Constructor method for GetMergedMfResponse
     * @uses GetMergedMfResponse::setMidocoMf()
     * @param \Pggns\MidocoApi\System\StructType\MidocoMf[] $midocoMf
     */
    public function __construct(?array $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\System\StructType\MidocoMf[]
     */
    public function getMidocoMf(): ?array
    {
        return $this->MidocoMf;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMf method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfForArrayConstraintsFromSetMidocoMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMergedMfResponseMidocoMfItem) {
            // validation for constraint: itemType
            if (!$getMergedMfResponseMidocoMfItem instanceof \Pggns\MidocoApi\System\StructType\MidocoMf) {
                $invalidValues[] = is_object($getMergedMfResponseMidocoMfItem) ? get_class($getMergedMfResponseMidocoMfItem) : sprintf('%s(%s)', gettype($getMergedMfResponseMidocoMfItem), var_export($getMergedMfResponseMidocoMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoMf[] $midocoMf
     * @return \Pggns\MidocoApi\System\StructType\GetMergedMfResponse
     */
    public function setMidocoMf(?array $midocoMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfArrayErrorMessage = self::validateMidocoMfForArrayConstraintsFromSetMidocoMf($midocoMf))) {
            throw new InvalidArgumentException($midocoMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
    /**
     * Add item to MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoMf $item
     * @return \Pggns\MidocoApi\System\StructType\GetMergedMfResponse
     */
    public function addToMidocoMf(\Pggns\MidocoApi\System\StructType\MidocoMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\MidocoMf) {
            throw new InvalidArgumentException(sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMf[] = $item;
        
        return $this;
    }
}
