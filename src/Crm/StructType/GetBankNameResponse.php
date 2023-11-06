<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankNameResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankNameResponse extends AbstractStructBase
{
    /**
     * The Bank
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\Bank[]
     */
    protected ?array $Bank = null;
    /**
     * Constructor method for GetBankNameResponse
     * @uses GetBankNameResponse::setBank()
     * @param \Pggns\MidocoApi\Crm\StructType\Bank[] $bank
     */
    public function __construct(?array $bank = null)
    {
        $this
            ->setBank($bank);
    }
    /**
     * Get Bank value
     * @return \Pggns\MidocoApi\Crm\StructType\Bank[]
     */
    public function getBank(): ?array
    {
        return $this->Bank;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBank method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBank method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankForArrayConstraintFromSetBank(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankNameResponseBankItem) {
            // validation for constraint: itemType
            if (!$getBankNameResponseBankItem instanceof \Pggns\MidocoApi\Crm\StructType\Bank) {
                $invalidValues[] = is_object($getBankNameResponseBankItem) ? get_class($getBankNameResponseBankItem) : sprintf('%s(%s)', gettype($getBankNameResponseBankItem), var_export($getBankNameResponseBankItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bank property can only contain items of type \Pggns\MidocoApi\Crm\StructType\Bank, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Bank value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\Bank[] $bank
     * @return \Pggns\MidocoApi\Crm\StructType\GetBankNameResponse
     */
    public function setBank(?array $bank = null): self
    {
        // validation for constraint: array
        if ('' !== ($bankArrayErrorMessage = self::validateBankForArrayConstraintFromSetBank($bank))) {
            throw new InvalidArgumentException($bankArrayErrorMessage, __LINE__);
        }
        $this->Bank = $bank;
        
        return $this;
    }
    /**
     * Add item to Bank value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\Bank $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBankNameResponse
     */
    public function addToBank(\Pggns\MidocoApi\Crm\StructType\Bank $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\Bank) {
            throw new InvalidArgumentException(sprintf('The Bank property can only contain items of type \Pggns\MidocoApi\Crm\StructType\Bank, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bank[] = $item;
        
        return $this;
    }
}
