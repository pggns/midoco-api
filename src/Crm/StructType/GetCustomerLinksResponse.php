<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerLinksResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomerLinks --- returns a list containing the links of the customer
 * @subpackage Structs
 */
class GetCustomerLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomerLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerLink
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[]
     */
    protected ?array $MidocoCrmCustomerLink = null;
    /**
     * Constructor method for GetCustomerLinksResponse
     * @uses GetCustomerLinksResponse::setMidocoCrmCustomerLink()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     */
    public function __construct(?array $midocoCrmCustomerLink = null)
    {
        $this
            ->setMidocoCrmCustomerLink($midocoCrmCustomerLink);
    }
    /**
     * Get MidocoCrmCustomerLink value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[]
     */
    public function getMidocoCrmCustomerLink(): ?array
    {
        return $this->MidocoCrmCustomerLink;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCustomerLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerLink method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerLinkForArrayConstraintsFromSetMidocoCrmCustomerLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerLinksResponseMidocoCrmCustomerLinkItem) {
            // validation for constraint: itemType
            if (!$getCustomerLinksResponseMidocoCrmCustomerLinkItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO) {
                $invalidValues[] = is_object($getCustomerLinksResponseMidocoCrmCustomerLinkItem) ? get_class($getCustomerLinksResponseMidocoCrmCustomerLinkItem) : sprintf('%s(%s)', gettype($getCustomerLinksResponseMidocoCrmCustomerLinkItem), var_export($getCustomerLinksResponseMidocoCrmCustomerLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerLinksResponse
     */
    public function setMidocoCrmCustomerLink(?array $midocoCrmCustomerLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerLinkArrayErrorMessage = self::validateMidocoCrmCustomerLinkForArrayConstraintsFromSetMidocoCrmCustomerLink($midocoCrmCustomerLink))) {
            throw new InvalidArgumentException($midocoCrmCustomerLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerLink = $midocoCrmCustomerLink;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerLinksResponse
     */
    public function addToMidocoCrmCustomerLink(\Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerLink[] = $item;
        
        return $this;
    }
}
