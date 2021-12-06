<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchVirtualAccountResponse StructType
 * @subpackage Structs
 */
class SearchVirtualAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO[]
     */
    protected ?array $MidocoVirtualAccount = null;
    /**
     * Constructor method for SearchVirtualAccountResponse
     * @uses SearchVirtualAccountResponse::setMidocoVirtualAccount()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO[] $midocoVirtualAccount
     */
    public function __construct(?array $midocoVirtualAccount = null)
    {
        $this
            ->setMidocoVirtualAccount($midocoVirtualAccount);
    }
    /**
     * Get MidocoVirtualAccount value
     * @return \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO[]
     */
    public function getMidocoVirtualAccount(): ?array
    {
        return $this->MidocoVirtualAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVirtualAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVirtualAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVirtualAccountForArrayConstraintsFromSetMidocoVirtualAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchVirtualAccountResponseMidocoVirtualAccountItem) {
            // validation for constraint: itemType
            if (!$searchVirtualAccountResponseMidocoVirtualAccountItem instanceof \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO) {
                $invalidValues[] = is_object($searchVirtualAccountResponseMidocoVirtualAccountItem) ? get_class($searchVirtualAccountResponseMidocoVirtualAccountItem) : sprintf('%s(%s)', gettype($searchVirtualAccountResponseMidocoVirtualAccountItem), var_export($searchVirtualAccountResponseMidocoVirtualAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVirtualAccount property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVirtualAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO[] $midocoVirtualAccount
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchVirtualAccountResponse
     */
    public function setMidocoVirtualAccount(?array $midocoVirtualAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVirtualAccountArrayErrorMessage = self::validateMidocoVirtualAccountForArrayConstraintsFromSetMidocoVirtualAccount($midocoVirtualAccount))) {
            throw new InvalidArgumentException($midocoVirtualAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoVirtualAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchVirtualAccountResponse
     */
    public function addToMidocoVirtualAccount(\Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVirtualAccount property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\VirtualAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVirtualAccount[] = $item;
        
        return $this;
    }
}
