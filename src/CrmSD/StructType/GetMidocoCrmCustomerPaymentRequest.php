<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCrmCustomerPaymentRequest StructType
 * @subpackage Structs
 */
class GetMidocoCrmCustomerPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The checkDebitCards
     * @var bool|null
     */
    protected ?bool $checkDebitCards = null;
    /**
     * Constructor method for GetMidocoCrmCustomerPaymentRequest
     * @uses GetMidocoCrmCustomerPaymentRequest::setMidocoCrmCustomer()
     * @uses GetMidocoCrmCustomerPaymentRequest::setCheckDebitCards()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param bool $checkDebitCards
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?bool $checkDebitCards = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setCheckDebitCards($checkDebitCards);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMidocoCrmCustomerPaymentRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get checkDebitCards value
     * @return bool|null
     */
    public function getCheckDebitCards(): ?bool
    {
        return $this->checkDebitCards;
    }
    /**
     * Set checkDebitCards value
     * @param bool $checkDebitCards
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMidocoCrmCustomerPaymentRequest
     */
    public function setCheckDebitCards(?bool $checkDebitCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkDebitCards) && !is_bool($checkDebitCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkDebitCards, true), gettype($checkDebitCards)), __LINE__);
        }
        $this->checkDebitCards = $checkDebitCards;
        
        return $this;
    }
}
