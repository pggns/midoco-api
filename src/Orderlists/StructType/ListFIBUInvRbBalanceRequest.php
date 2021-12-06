<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListFIBUInvRbBalanceRequest StructType
 * @subpackage Structs
 */
class ListFIBUInvRbBalanceRequest extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The invoiceDateFrom
     * @var string|null
     */
    protected ?string $invoiceDateFrom = null;
    /**
     * The invoiceDateTo
     * @var string|null
     */
    protected ?string $invoiceDateTo = null;
    /**
     * The excludedAccountsFrom
     * @var string|null
     */
    protected ?string $excludedAccountsFrom = null;
    /**
     * The excludedAccountsTo
     * @var string|null
     */
    protected ?string $excludedAccountsTo = null;
    /**
     * The listType
     * Meta information extracted from the WSDL
     * - documentation: 0 - All 1 - Creditor 2 - Debitor
     * @var int|null
     */
    protected ?int $listType = null;
    /**
     * The createCsvContent
     * @var bool|null
     */
    protected ?bool $createCsvContent = null;
    /**
     * Constructor method for ListFIBUInvRbBalanceRequest
     * @uses ListFIBUInvRbBalanceRequest::setOrgUnits()
     * @uses ListFIBUInvRbBalanceRequest::setOrderNo()
     * @uses ListFIBUInvRbBalanceRequest::setInvoiceDateFrom()
     * @uses ListFIBUInvRbBalanceRequest::setInvoiceDateTo()
     * @uses ListFIBUInvRbBalanceRequest::setExcludedAccountsFrom()
     * @uses ListFIBUInvRbBalanceRequest::setExcludedAccountsTo()
     * @uses ListFIBUInvRbBalanceRequest::setListType()
     * @uses ListFIBUInvRbBalanceRequest::setCreateCsvContent()
     * @param string[] $orgUnits
     * @param int $orderNo
     * @param string $invoiceDateFrom
     * @param string $invoiceDateTo
     * @param string $excludedAccountsFrom
     * @param string $excludedAccountsTo
     * @param int $listType
     * @param bool $createCsvContent
     */
    public function __construct(?array $orgUnits = null, ?int $orderNo = null, ?string $invoiceDateFrom = null, ?string $invoiceDateTo = null, ?string $excludedAccountsFrom = null, ?string $excludedAccountsTo = null, ?int $listType = null, ?bool $createCsvContent = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setOrderNo($orderNo)
            ->setInvoiceDateFrom($invoiceDateFrom)
            ->setInvoiceDateTo($invoiceDateTo)
            ->setExcludedAccountsFrom($excludedAccountsFrom)
            ->setExcludedAccountsTo($excludedAccountsTo)
            ->setListType($listType)
            ->setCreateCsvContent($createCsvContent);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listFIBUInvRbBalanceRequestOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($listFIBUInvRbBalanceRequestOrgUnitsItem)) {
                $invalidValues[] = is_object($listFIBUInvRbBalanceRequestOrgUnitsItem) ? get_class($listFIBUInvRbBalanceRequestOrgUnitsItem) : sprintf('%s(%s)', gettype($listFIBUInvRbBalanceRequestOrgUnitsItem), var_export($listFIBUInvRbBalanceRequestOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get invoiceDateFrom value
     * @return string|null
     */
    public function getInvoiceDateFrom(): ?string
    {
        return $this->invoiceDateFrom;
    }
    /**
     * Set invoiceDateFrom value
     * @param string $invoiceDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setInvoiceDateFrom(?string $invoiceDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateFrom) && !is_string($invoiceDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateFrom, true), gettype($invoiceDateFrom)), __LINE__);
        }
        $this->invoiceDateFrom = $invoiceDateFrom;
        
        return $this;
    }
    /**
     * Get invoiceDateTo value
     * @return string|null
     */
    public function getInvoiceDateTo(): ?string
    {
        return $this->invoiceDateTo;
    }
    /**
     * Set invoiceDateTo value
     * @param string $invoiceDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setInvoiceDateTo(?string $invoiceDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateTo) && !is_string($invoiceDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateTo, true), gettype($invoiceDateTo)), __LINE__);
        }
        $this->invoiceDateTo = $invoiceDateTo;
        
        return $this;
    }
    /**
     * Get excludedAccountsFrom value
     * @return string|null
     */
    public function getExcludedAccountsFrom(): ?string
    {
        return $this->excludedAccountsFrom;
    }
    /**
     * Set excludedAccountsFrom value
     * @param string $excludedAccountsFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setExcludedAccountsFrom(?string $excludedAccountsFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedAccountsFrom) && !is_string($excludedAccountsFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedAccountsFrom, true), gettype($excludedAccountsFrom)), __LINE__);
        }
        $this->excludedAccountsFrom = $excludedAccountsFrom;
        
        return $this;
    }
    /**
     * Get excludedAccountsTo value
     * @return string|null
     */
    public function getExcludedAccountsTo(): ?string
    {
        return $this->excludedAccountsTo;
    }
    /**
     * Set excludedAccountsTo value
     * @param string $excludedAccountsTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setExcludedAccountsTo(?string $excludedAccountsTo = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedAccountsTo) && !is_string($excludedAccountsTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedAccountsTo, true), gettype($excludedAccountsTo)), __LINE__);
        }
        $this->excludedAccountsTo = $excludedAccountsTo;
        
        return $this;
    }
    /**
     * Get listType value
     * @return int|null
     */
    public function getListType(): ?int
    {
        return $this->listType;
    }
    /**
     * Set listType value
     * @param int $listType
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setListType(?int $listType = null): self
    {
        // validation for constraint: int
        if (!is_null($listType) && !(is_int($listType) || ctype_digit($listType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listType, true), gettype($listType)), __LINE__);
        }
        $this->listType = $listType;
        
        return $this;
    }
    /**
     * Get createCsvContent value
     * @return bool|null
     */
    public function getCreateCsvContent(): ?bool
    {
        return $this->createCsvContent;
    }
    /**
     * Set createCsvContent value
     * @param bool $createCsvContent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest
     */
    public function setCreateCsvContent(?bool $createCsvContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createCsvContent) && !is_bool($createCsvContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createCsvContent, true), gettype($createCsvContent)), __LINE__);
        }
        $this->createCsvContent = $createCsvContent;
        
        return $this;
    }
}
