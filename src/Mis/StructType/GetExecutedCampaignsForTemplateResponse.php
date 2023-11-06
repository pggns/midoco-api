<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExecutedCampaignsForTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExecutedCampaignsForTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoCampaignExecutedFromTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignExecutedFromTemplate
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType[]
     */
    protected ?array $MidocoCampaignExecutedFromTemplate = null;
    /**
     * Constructor method for GetExecutedCampaignsForTemplateResponse
     * @uses GetExecutedCampaignsForTemplateResponse::setMidocoCampaignExecutedFromTemplate()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType[] $midocoCampaignExecutedFromTemplate
     */
    public function __construct(?array $midocoCampaignExecutedFromTemplate = null)
    {
        $this
            ->setMidocoCampaignExecutedFromTemplate($midocoCampaignExecutedFromTemplate);
    }
    /**
     * Get MidocoCampaignExecutedFromTemplate value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType[]
     */
    public function getMidocoCampaignExecutedFromTemplate(): ?array
    {
        return $this->MidocoCampaignExecutedFromTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCampaignExecutedFromTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignExecutedFromTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignExecutedFromTemplateForArrayConstraintFromSetMidocoCampaignExecutedFromTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem) {
            // validation for constraint: itemType
            if (!$getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType) {
                $invalidValues[] = is_object($getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem) ? get_class($getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem) : sprintf('%s(%s)', gettype($getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem), var_export($getExecutedCampaignsForTemplateResponseMidocoCampaignExecutedFromTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignExecutedFromTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignExecutedFromTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType[] $midocoCampaignExecutedFromTemplate
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateResponse
     */
    public function setMidocoCampaignExecutedFromTemplate(?array $midocoCampaignExecutedFromTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignExecutedFromTemplateArrayErrorMessage = self::validateMidocoCampaignExecutedFromTemplateForArrayConstraintFromSetMidocoCampaignExecutedFromTemplate($midocoCampaignExecutedFromTemplate))) {
            throw new InvalidArgumentException($midocoCampaignExecutedFromTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignExecutedFromTemplate = $midocoCampaignExecutedFromTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignExecutedFromTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateResponse
     */
    public function addToMidocoCampaignExecutedFromTemplate(\Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignExecutedFromTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignExecutedFromTemplate[] = $item;
        
        return $this;
    }
}
