<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableAccountsResponse StructType
 * @subpackage Structs
 */
class GetAvailableAccountsResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAccount[]
     */
    protected ?array $MidocoAccount = null;
    /**
     * Constructor method for GetAvailableAccountsResponse
     * @uses GetAvailableAccountsResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount[] $midocoAccount
     */
    public function __construct(?array $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAccount[]
     */
    public function getMidocoAccount(): ?array
    {
        return $this->MidocoAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccountForArrayConstraintsFromSetMidocoAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableAccountsResponseMidocoAccountItem) {
            // validation for constraint: itemType
            if (!$getAvailableAccountsResponseMidocoAccountItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAccount) {
                $invalidValues[] = is_object($getAvailableAccountsResponseMidocoAccountItem) ? get_class($getAvailableAccountsResponseMidocoAccountItem) : sprintf('%s(%s)', gettype($getAvailableAccountsResponseMidocoAccountItem), var_export($getAvailableAccountsResponseMidocoAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount[] $midocoAccount
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAccountsResponse
     */
    public function setMidocoAccount(?array $midocoAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccountArrayErrorMessage = self::validateMidocoAccountForArrayConstraintsFromSetMidocoAccount($midocoAccount))) {
            throw new InvalidArgumentException($midocoAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAccountsResponse
     */
    public function addToMidocoAccount(\Pggns\MidocoApi\Documents\StructType\MidocoAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccount[] = $item;
        
        return $this;
    }
}
