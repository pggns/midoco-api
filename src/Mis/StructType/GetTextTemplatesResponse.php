<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextTemplatesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTextTemplates --- return a list of text templates, which are available for the OrgUnit
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTextTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoCampaignTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignTemplate
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO[]
     */
    protected ?array $MidocoCampaignTemplate = null;
    /**
     * Constructor method for GetTextTemplatesResponse
     * @uses GetTextTemplatesResponse::setMidocoCampaignTemplate()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO[] $midocoCampaignTemplate
     */
    public function __construct(?array $midocoCampaignTemplate = null)
    {
        $this
            ->setMidocoCampaignTemplate($midocoCampaignTemplate);
    }
    /**
     * Get MidocoCampaignTemplate value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO[]
     */
    public function getMidocoCampaignTemplate(): ?array
    {
        return $this->MidocoCampaignTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCampaignTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignTemplateForArrayConstraintFromSetMidocoCampaignTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTextTemplatesResponseMidocoCampaignTemplateItem) {
            // validation for constraint: itemType
            if (!$getTextTemplatesResponseMidocoCampaignTemplateItem instanceof \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO) {
                $invalidValues[] = is_object($getTextTemplatesResponseMidocoCampaignTemplateItem) ? get_class($getTextTemplatesResponseMidocoCampaignTemplateItem) : sprintf('%s(%s)', gettype($getTextTemplatesResponseMidocoCampaignTemplateItem), var_export($getTextTemplatesResponseMidocoCampaignTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO[] $midocoCampaignTemplate
     * @return \Pggns\MidocoApi\Mis\StructType\GetTextTemplatesResponse
     */
    public function setMidocoCampaignTemplate(?array $midocoCampaignTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignTemplateArrayErrorMessage = self::validateMidocoCampaignTemplateForArrayConstraintFromSetMidocoCampaignTemplate($midocoCampaignTemplate))) {
            throw new InvalidArgumentException($midocoCampaignTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignTemplate = $midocoCampaignTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetTextTemplatesResponse
     */
    public function addToMidocoCampaignTemplate(\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignTemplate[] = $item;
        
        return $this;
    }
}
