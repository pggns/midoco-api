<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLetterTemplatesResponse StructType
 * @subpackage Structs
 */
class GetLetterTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoLetterTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLetterTemplate
     * @var \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO[]
     */
    protected ?array $MidocoLetterTemplate = null;
    /**
     * Constructor method for GetLetterTemplatesResponse
     * @uses GetLetterTemplatesResponse::setMidocoLetterTemplate()
     * @param \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     */
    public function __construct(?array $midocoLetterTemplate = null)
    {
        $this
            ->setMidocoLetterTemplate($midocoLetterTemplate);
    }
    /**
     * Get MidocoLetterTemplate value
     * @return \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO[]
     */
    public function getMidocoLetterTemplate(): ?array
    {
        return $this->MidocoLetterTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoLetterTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoLetterTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoLetterTemplateForArrayConstraintsFromSetMidocoLetterTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLetterTemplatesResponseMidocoLetterTemplateItem) {
            // validation for constraint: itemType
            if (!$getLetterTemplatesResponseMidocoLetterTemplateItem instanceof \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO) {
                $invalidValues[] = is_object($getLetterTemplatesResponseMidocoLetterTemplateItem) ? get_class($getLetterTemplatesResponseMidocoLetterTemplateItem) : sprintf('%s(%s)', gettype($getLetterTemplatesResponseMidocoLetterTemplateItem), var_export($getLetterTemplatesResponseMidocoLetterTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLetterTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     * @return \Pggns\MidocoApi\Crm\StructType\GetLetterTemplatesResponse
     */
    public function setMidocoLetterTemplate(?array $midocoLetterTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoLetterTemplateArrayErrorMessage = self::validateMidocoLetterTemplateForArrayConstraintsFromSetMidocoLetterTemplate($midocoLetterTemplate))) {
            throw new InvalidArgumentException($midocoLetterTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoLetterTemplate = $midocoLetterTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoLetterTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetLetterTemplatesResponse
     */
    public function addToMidocoLetterTemplate(\Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLetterTemplate[] = $item;
        
        return $this;
    }
}
