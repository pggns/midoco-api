<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankAccountResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: search a bank account
 * @subpackage Structs
 */
class SearchBankAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount[]
     */
    protected ?array $MidocoBankAccount = null;
    /**
     * Constructor method for SearchBankAccountResponse
     * @uses SearchBankAccountResponse::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount[] $midocoBankAccount
     */
    public function __construct(?array $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount[]
     */
    public function getMidocoBankAccount(): ?array
    {
        return $this->MidocoBankAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankAccountForArrayConstraintsFromSetMidocoBankAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBankAccountResponseMidocoBankAccountItem) {
            // validation for constraint: itemType
            if (!$searchBankAccountResponseMidocoBankAccountItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount) {
                $invalidValues[] = is_object($searchBankAccountResponseMidocoBankAccountItem) ? get_class($searchBankAccountResponseMidocoBankAccountItem) : sprintf('%s(%s)', gettype($searchBankAccountResponseMidocoBankAccountItem), var_export($searchBankAccountResponseMidocoBankAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankAccount property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount[] $midocoBankAccount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SearchBankAccountResponse
     */
    public function setMidocoBankAccount(?array $midocoBankAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankAccountArrayErrorMessage = self::validateMidocoBankAccountForArrayConstraintsFromSetMidocoBankAccount($midocoBankAccount))) {
            throw new InvalidArgumentException($midocoBankAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SearchBankAccountResponse
     */
    public function addToMidocoBankAccount(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoBankAccount property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankAccount[] = $item;
        
        return $this;
    }
}
