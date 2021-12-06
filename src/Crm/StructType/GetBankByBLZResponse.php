<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankByBLZResponse StructType
 * @subpackage Structs
 */
class GetBankByBLZResponse extends AbstractStructBase
{
    /**
     * The MidocoBankNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankNumber
     * @var \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO[]
     */
    protected ?array $MidocoBankNumber = null;
    /**
     * Constructor method for GetBankByBLZResponse
     * @uses GetBankByBLZResponse::setMidocoBankNumber()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO[] $midocoBankNumber
     */
    public function __construct(?array $midocoBankNumber = null)
    {
        $this
            ->setMidocoBankNumber($midocoBankNumber);
    }
    /**
     * Get MidocoBankNumber value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO[]
     */
    public function getMidocoBankNumber(): ?array
    {
        return $this->MidocoBankNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankNumberForArrayConstraintsFromSetMidocoBankNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankByBLZResponseMidocoBankNumberItem) {
            // validation for constraint: itemType
            if (!$getBankByBLZResponseMidocoBankNumberItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO) {
                $invalidValues[] = is_object($getBankByBLZResponseMidocoBankNumberItem) ? get_class($getBankByBLZResponseMidocoBankNumberItem) : sprintf('%s(%s)', gettype($getBankByBLZResponseMidocoBankNumberItem), var_export($getBankByBLZResponseMidocoBankNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankNumber property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO[] $midocoBankNumber
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetBankByBLZResponse
     */
    public function setMidocoBankNumber(?array $midocoBankNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankNumberArrayErrorMessage = self::validateMidocoBankNumberForArrayConstraintsFromSetMidocoBankNumber($midocoBankNumber))) {
            throw new InvalidArgumentException($midocoBankNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankNumber = $midocoBankNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoBankNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetBankByBLZResponse
     */
    public function addToMidocoBankNumber(\Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBankNumber property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\BankNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankNumber[] = $item;
        
        return $this;
    }
}
