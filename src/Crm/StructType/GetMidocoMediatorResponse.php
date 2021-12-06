<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoMediatorResponse StructType
 * @subpackage Structs
 */
class GetMidocoMediatorResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * Constructor method for GetMidocoMediatorResponse
     * @uses GetMidocoMediatorResponse::setMidocoCrmCustomer()
     * @uses GetMidocoMediatorResponse::setMidocoCrmCustomerPayment()
     * @uses GetMidocoMediatorResponse::setMidocoCrmDebitCard()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?array $midocoCrmDebitCard = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoMediatorResponse
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoMediatorResponse
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoMediatorResponseMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$getMidocoMediatorResponseMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($getMidocoMediatorResponseMidocoCrmDebitCardItem) ? get_class($getMidocoMediatorResponseMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($getMidocoMediatorResponseMidocoCrmDebitCardItem), var_export($getMidocoMediatorResponseMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoMediatorResponse
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoMediatorResponse
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
}
