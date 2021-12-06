<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUser StructType
 * @subpackage Structs
 */
class MidocoUser extends UserDTO
{
    /**
     * The MidocoCrsExpedient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrsExpedient
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO[]
     */
    protected ?array $MidocoCrsExpedient = null;
    /**
     * Constructor method for MidocoUser
     * @uses MidocoUser::setMidocoCrsExpedient()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO[] $midocoCrsExpedient
     */
    public function __construct(?array $midocoCrsExpedient = null)
    {
        $this
            ->setMidocoCrsExpedient($midocoCrsExpedient);
    }
    /**
     * Get MidocoCrsExpedient value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO[]
     */
    public function getMidocoCrsExpedient(): ?array
    {
        return $this->MidocoCrsExpedient;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrsExpedient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrsExpedient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrsExpedientForArrayConstraintsFromSetMidocoCrsExpedient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUserMidocoCrsExpedientItem) {
            // validation for constraint: itemType
            if (!$midocoUserMidocoCrsExpedientItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO) {
                $invalidValues[] = is_object($midocoUserMidocoCrsExpedientItem) ? get_class($midocoUserMidocoCrsExpedientItem) : sprintf('%s(%s)', gettype($midocoUserMidocoCrsExpedientItem), var_export($midocoUserMidocoCrsExpedientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrsExpedient property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrsExpedient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO[] $midocoCrsExpedient
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoUser
     */
    public function setMidocoCrsExpedient(?array $midocoCrsExpedient = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrsExpedientArrayErrorMessage = self::validateMidocoCrsExpedientForArrayConstraintsFromSetMidocoCrsExpedient($midocoCrsExpedient))) {
            throw new InvalidArgumentException($midocoCrsExpedientArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrsExpedient = $midocoCrsExpedient;
        
        return $this;
    }
    /**
     * Add item to MidocoCrsExpedient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoUser
     */
    public function addToMidocoCrsExpedient(\Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrsExpedient property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\CrsExpedientDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrsExpedient[] = $item;
        
        return $this;
    }
}
