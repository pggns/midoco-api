<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerByCriteriaResponse StructType
 * @subpackage Structs
 */
class SearchCustomerByCriteriaResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerInformation
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation[]
     */
    protected ?array $MidocoCustomerInformation = null;
    /**
     * Constructor method for SearchCustomerByCriteriaResponse
     * @uses SearchCustomerByCriteriaResponse::setMidocoCustomerInformation()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation[] $midocoCustomerInformation
     */
    public function __construct(?array $midocoCustomerInformation = null)
    {
        $this
            ->setMidocoCustomerInformation($midocoCustomerInformation);
    }
    /**
     * Get MidocoCustomerInformation value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation[]
     */
    public function getMidocoCustomerInformation(): ?array
    {
        return $this->MidocoCustomerInformation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerInformationForArrayConstraintsFromSetMidocoCustomerInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerByCriteriaResponseMidocoCustomerInformationItem) {
            // validation for constraint: itemType
            if (!$searchCustomerByCriteriaResponseMidocoCustomerInformationItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation) {
                $invalidValues[] = is_object($searchCustomerByCriteriaResponseMidocoCustomerInformationItem) ? get_class($searchCustomerByCriteriaResponseMidocoCustomerInformationItem) : sprintf('%s(%s)', gettype($searchCustomerByCriteriaResponseMidocoCustomerInformationItem), var_export($searchCustomerByCriteriaResponseMidocoCustomerInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerInformation property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerInformation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation[] $midocoCustomerInformation
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByCriteriaResponse
     */
    public function setMidocoCustomerInformation(?array $midocoCustomerInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerInformationArrayErrorMessage = self::validateMidocoCustomerInformationForArrayConstraintsFromSetMidocoCustomerInformation($midocoCustomerInformation))) {
            throw new InvalidArgumentException($midocoCustomerInformationArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerInformation = $midocoCustomerInformation;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerInformation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByCriteriaResponse
     */
    public function addToMidocoCustomerInformation(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerInformation property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerInformation[] = $item;
        
        return $this;
    }
}
