<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmDocument StructType
 * @subpackage Structs
 */
class CrmDocument extends StandardDocument
{
    /**
     * The crmDocumentId
     * @var int|null
     */
    protected ?int $crmDocumentId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: address
     * @var \Pggns\MidocoApi\Documents\StructType\Address|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\Address $address = null;
    /**
     * Constructor method for CrmDocument
     * @uses CrmDocument::setCrmDocumentId()
     * @uses CrmDocument::setCustomerId()
     * @uses CrmDocument::setAddress()
     * @param int $crmDocumentId
     * @param int $customerId
     * @param \Pggns\MidocoApi\Documents\StructType\Address $address
     */
    public function __construct(?int $crmDocumentId = null, ?int $customerId = null, ?\Pggns\MidocoApi\Documents\StructType\Address $address = null)
    {
        $this
            ->setCrmDocumentId($crmDocumentId)
            ->setCustomerId($customerId)
            ->setAddress($address);
    }
    /**
     * Get crmDocumentId value
     * @return int|null
     */
    public function getCrmDocumentId(): ?int
    {
        return $this->crmDocumentId;
    }
    /**
     * Set crmDocumentId value
     * @param int $crmDocumentId
     * @return \Pggns\MidocoApi\Documents\StructType\CrmDocument
     */
    public function setCrmDocumentId(?int $crmDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($crmDocumentId) && !(is_int($crmDocumentId) || ctype_digit($crmDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmDocumentId, true), gettype($crmDocumentId)), __LINE__);
        }
        $this->crmDocumentId = $crmDocumentId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Documents\StructType\CrmDocument
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get address value
     * @return \Pggns\MidocoApi\Documents\StructType\Address|null
     */
    public function getAddress(): ?\Pggns\MidocoApi\Documents\StructType\Address
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Pggns\MidocoApi\Documents\StructType\Address $address
     * @return \Pggns\MidocoApi\Documents\StructType\CrmDocument
     */
    public function setAddress(?\Pggns\MidocoApi\Documents\StructType\Address $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
}
