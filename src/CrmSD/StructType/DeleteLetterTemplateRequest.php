<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteLetterTemplateRequest StructType
 * @subpackage Structs
 */
class DeleteLetterTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoLetterTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLetterTemplate
     * @var \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO[]
     */
    protected ?array $MidocoLetterTemplate = null;
    /**
     * Constructor method for DeleteLetterTemplateRequest
     * @uses DeleteLetterTemplateRequest::setMidocoLetterTemplate()
     * @param \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     */
    public function __construct(?array $midocoLetterTemplate = null)
    {
        $this
            ->setMidocoLetterTemplate($midocoLetterTemplate);
    }
    /**
     * Get MidocoLetterTemplate value
     * @return \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO[]
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
        foreach ($values as $deleteLetterTemplateRequestMidocoLetterTemplateItem) {
            // validation for constraint: itemType
            if (!$deleteLetterTemplateRequestMidocoLetterTemplateItem instanceof \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO) {
                $invalidValues[] = is_object($deleteLetterTemplateRequestMidocoLetterTemplateItem) ? get_class($deleteLetterTemplateRequestMidocoLetterTemplateItem) : sprintf('%s(%s)', gettype($deleteLetterTemplateRequestMidocoLetterTemplateItem), var_export($deleteLetterTemplateRequestMidocoLetterTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLetterTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteLetterTemplateRequest
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
     * @param \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteLetterTemplateRequest
     */
    public function addToMidocoLetterTemplate(\Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\LetterTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLetterTemplate[] = $item;
        
        return $this;
    }
}
