<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguagesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplates --- get a list of templates languages
 * @subpackage Structs
 */
class GetTemplateLanguagesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplateLanguage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTemplateLanguage
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO[]
     */
    protected ?array $MidocoCrmTemplateLanguage = null;
    /**
     * Constructor method for GetTemplateLanguagesResponse
     * @uses GetTemplateLanguagesResponse::setMidocoCrmTemplateLanguage()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO[] $midocoCrmTemplateLanguage
     */
    public function __construct(?array $midocoCrmTemplateLanguage = null)
    {
        $this
            ->setMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage);
    }
    /**
     * Get MidocoCrmTemplateLanguage value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO[]
     */
    public function getMidocoCrmTemplateLanguage(): ?array
    {
        return $this->MidocoCrmTemplateLanguage;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmTemplateLanguage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTemplateLanguage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTemplateLanguageForArrayConstraintsFromSetMidocoCrmTemplateLanguage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) {
            // validation for constraint: itemType
            if (!$getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO) {
                $invalidValues[] = is_object($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) ? get_class($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) : sprintf('%s(%s)', gettype($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem), var_export($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmTemplateLanguage property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmTemplateLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO[] $midocoCrmTemplateLanguage
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetTemplateLanguagesResponse
     */
    public function setMidocoCrmTemplateLanguage(?array $midocoCrmTemplateLanguage = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTemplateLanguageArrayErrorMessage = self::validateMidocoCrmTemplateLanguageForArrayConstraintsFromSetMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage))) {
            throw new InvalidArgumentException($midocoCrmTemplateLanguageArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTemplateLanguage = $midocoCrmTemplateLanguage;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTemplateLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetTemplateLanguagesResponse
     */
    public function addToMidocoCrmTemplateLanguage(\Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmTemplateLanguage property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateLanguageDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmTemplateLanguage[] = $item;
        
        return $this;
    }
}
