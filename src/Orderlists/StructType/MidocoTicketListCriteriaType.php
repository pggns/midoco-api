<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTicketListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoTicketListCriteriaType extends MidocoSalesListCriteriaType
{
    /**
     * The issueDateFrom
     * @var string|null
     */
    protected ?string $issueDateFrom = null;
    /**
     * The issueDateTo
     * @var string|null
     */
    protected ?string $issueDateTo = null;
    /**
     * The noSupplierInvoice
     * @var bool|null
     */
    protected ?bool $noSupplierInvoice = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for MidocoTicketListCriteriaType
     * @uses MidocoTicketListCriteriaType::setIssueDateFrom()
     * @uses MidocoTicketListCriteriaType::setIssueDateTo()
     * @uses MidocoTicketListCriteriaType::setNoSupplierInvoice()
     * @uses MidocoTicketListCriteriaType::setDebitorNo()
     * @uses MidocoTicketListCriteriaType::setRoute()
     * @uses MidocoTicketListCriteriaType::setCarrier()
     * @uses MidocoTicketListCriteriaType::setFlightNo()
     * @uses MidocoTicketListCriteriaType::setTicketNo()
     * @uses MidocoTicketListCriteriaType::setSupplierId()
     * @uses MidocoTicketListCriteriaType::setCustomerId()
     * @param string $issueDateFrom
     * @param string $issueDateTo
     * @param bool $noSupplierInvoice
     * @param string $debitorNo
     * @param string $route
     * @param string $carrier
     * @param string $flightNo
     * @param string $ticketNo
     * @param string $supplierId
     * @param int $customerId
     */
    public function __construct(?string $issueDateFrom = null, ?string $issueDateTo = null, ?bool $noSupplierInvoice = null, ?string $debitorNo = null, ?string $route = null, ?string $carrier = null, ?string $flightNo = null, ?string $ticketNo = null, ?string $supplierId = null, ?int $customerId = null)
    {
        $this
            ->setIssueDateFrom($issueDateFrom)
            ->setIssueDateTo($issueDateTo)
            ->setNoSupplierInvoice($noSupplierInvoice)
            ->setDebitorNo($debitorNo)
            ->setRoute($route)
            ->setCarrier($carrier)
            ->setFlightNo($flightNo)
            ->setTicketNo($ticketNo)
            ->setSupplierId($supplierId)
            ->setCustomerId($customerId);
    }
    /**
     * Get issueDateFrom value
     * @return string|null
     */
    public function getIssueDateFrom(): ?string
    {
        return $this->issueDateFrom;
    }
    /**
     * Set issueDateFrom value
     * @param string $issueDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setIssueDateFrom(?string $issueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDateFrom) && !is_string($issueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDateFrom, true), gettype($issueDateFrom)), __LINE__);
        }
        $this->issueDateFrom = $issueDateFrom;
        
        return $this;
    }
    /**
     * Get issueDateTo value
     * @return string|null
     */
    public function getIssueDateTo(): ?string
    {
        return $this->issueDateTo;
    }
    /**
     * Set issueDateTo value
     * @param string $issueDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setIssueDateTo(?string $issueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDateTo) && !is_string($issueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDateTo, true), gettype($issueDateTo)), __LINE__);
        }
        $this->issueDateTo = $issueDateTo;
        
        return $this;
    }
    /**
     * Get noSupplierInvoice value
     * @return bool|null
     */
    public function getNoSupplierInvoice(): ?bool
    {
        return $this->noSupplierInvoice;
    }
    /**
     * Set noSupplierInvoice value
     * @param bool $noSupplierInvoice
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setNoSupplierInvoice(?bool $noSupplierInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noSupplierInvoice) && !is_bool($noSupplierInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noSupplierInvoice, true), gettype($noSupplierInvoice)), __LINE__);
        }
        $this->noSupplierInvoice = $noSupplierInvoice;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTicketListCriteriaType
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
}
