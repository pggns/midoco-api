<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningLettersResponse StructType
 * @subpackage Structs
 */
class GetDunningLettersResponse extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO[]
     */
    protected ?array $MidocoDunningLetter = null;
    /**
     * Constructor method for GetDunningLettersResponse
     * @uses GetDunningLettersResponse::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO[] $midocoDunningLetter
     */
    public function __construct(?array $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO[]
     */
    public function getMidocoDunningLetter(): ?array
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDunningLetter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunningLetter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningLetterForArrayConstraintsFromSetMidocoDunningLetter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDunningLettersResponseMidocoDunningLetterItem) {
            // validation for constraint: itemType
            if (!$getDunningLettersResponseMidocoDunningLetterItem instanceof \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO) {
                $invalidValues[] = is_object($getDunningLettersResponseMidocoDunningLetterItem) ? get_class($getDunningLettersResponseMidocoDunningLetterItem) : sprintf('%s(%s)', gettype($getDunningLettersResponseMidocoDunningLetterItem), var_export($getDunningLettersResponseMidocoDunningLetterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunningLetter property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunningLetter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO[] $midocoDunningLetter
     * @return \Pggns\MidocoApi\Documents\StructType\GetDunningLettersResponse
     */
    public function setMidocoDunningLetter(?array $midocoDunningLetter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningLetterArrayErrorMessage = self::validateMidocoDunningLetterForArrayConstraintsFromSetMidocoDunningLetter($midocoDunningLetter))) {
            throw new InvalidArgumentException($midocoDunningLetterArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
    /**
     * Add item to MidocoDunningLetter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetDunningLettersResponse
     */
    public function addToMidocoDunningLetter(\Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDunningLetter property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunningLetter[] = $item;
        
        return $this;
    }
}
