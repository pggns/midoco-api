<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsers4PrintQueueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsers4PrintQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUser
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser[]
     */
    protected ?array $MidocoUser = null;
    /**
     * Constructor method for GetUsers4PrintQueueResponse
     * @uses GetUsers4PrintQueueResponse::setMidocoUser()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser[] $midocoUser
     */
    public function __construct(?array $midocoUser = null)
    {
        $this
            ->setMidocoUser($midocoUser);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser[]
     */
    public function getMidocoUser(): ?array
    {
        return $this->MidocoUser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserForArrayConstraintFromSetMidocoUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsers4PrintQueueResponseMidocoUserItem) {
            // validation for constraint: itemType
            if (!$getUsers4PrintQueueResponseMidocoUserItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser) {
                $invalidValues[] = is_object($getUsers4PrintQueueResponseMidocoUserItem) ? get_class($getUsers4PrintQueueResponseMidocoUserItem) : sprintf('%s(%s)', gettype($getUsers4PrintQueueResponseMidocoUserItem), var_export($getUsers4PrintQueueResponseMidocoUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser[] $midocoUser
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUsers4PrintQueueResponse
     */
    public function setMidocoUser(?array $midocoUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserArrayErrorMessage = self::validateMidocoUserForArrayConstraintFromSetMidocoUser($midocoUser))) {
            throw new InvalidArgumentException($midocoUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
    /**
     * Add item to MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUsers4PrintQueueResponse
     */
    public function addToMidocoUser(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser) {
            throw new InvalidArgumentException(sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUser[] = $item;
        
        return $this;
    }
}
