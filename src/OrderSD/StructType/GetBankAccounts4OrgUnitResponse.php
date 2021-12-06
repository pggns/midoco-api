<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccounts4OrgUnitResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return all bank accounts to a given orgUnit
 * @subpackage Structs
 */
class GetBankAccounts4OrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount[]
     */
    protected ?array $MidocoBankAccount = null;
    /**
     * Constructor method for GetBankAccounts4OrgUnitResponse
     * @uses GetBankAccounts4OrgUnitResponse::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount[] $midocoBankAccount
     */
    public function __construct(?array $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount[]
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
        foreach ($values as $getBankAccounts4OrgUnitResponseMidocoBankAccountItem) {
            // validation for constraint: itemType
            if (!$getBankAccounts4OrgUnitResponseMidocoBankAccountItem instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount) {
                $invalidValues[] = is_object($getBankAccounts4OrgUnitResponseMidocoBankAccountItem) ? get_class($getBankAccounts4OrgUnitResponseMidocoBankAccountItem) : sprintf('%s(%s)', gettype($getBankAccounts4OrgUnitResponseMidocoBankAccountItem), var_export($getBankAccounts4OrgUnitResponseMidocoBankAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankAccount property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount[] $midocoBankAccount
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitResponse
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
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitResponse
     */
    public function addToMidocoBankAccount(\Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoBankAccount property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankAccount[] = $item;
        
        return $this;
    }
}
