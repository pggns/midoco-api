<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorTextTemplatesResponse StructType
 * @subpackage Structs
 */
class GetMediatorTextTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerTextTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTextTemplate
     * @var \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO[]
     */
    protected ?array $MidocoCustomerTextTemplate = null;
    /**
     * Constructor method for GetMediatorTextTemplatesResponse
     * @uses GetMediatorTextTemplatesResponse::setMidocoCustomerTextTemplate()
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO[] $midocoCustomerTextTemplate
     */
    public function __construct(?array $midocoCustomerTextTemplate = null)
    {
        $this
            ->setMidocoCustomerTextTemplate($midocoCustomerTextTemplate);
    }
    /**
     * Get MidocoCustomerTextTemplate value
     * @return \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO[]
     */
    public function getMidocoCustomerTextTemplate(): ?array
    {
        return $this->MidocoCustomerTextTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTextTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTextTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTextTemplateForArrayConstraintsFromSetMidocoCustomerTextTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem) {
            // validation for constraint: itemType
            if (!$getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem instanceof \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO) {
                $invalidValues[] = is_object($getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem) ? get_class($getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem) : sprintf('%s(%s)', gettype($getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem), var_export($getMediatorTextTemplatesResponseMidocoCustomerTextTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTextTemplate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTextTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO[] $midocoCustomerTextTemplate
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesResponse
     */
    public function setMidocoCustomerTextTemplate(?array $midocoCustomerTextTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTextTemplateArrayErrorMessage = self::validateMidocoCustomerTextTemplateForArrayConstraintsFromSetMidocoCustomerTextTemplate($midocoCustomerTextTemplate))) {
            throw new InvalidArgumentException($midocoCustomerTextTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTextTemplate = $midocoCustomerTextTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTextTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesResponse
     */
    public function addToMidocoCustomerTextTemplate(\Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTextTemplate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTextTemplate[] = $item;
        
        return $this;
    }
}
