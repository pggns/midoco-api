<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersFromTopMostOrgUnitResponse StructType
 * @subpackage Structs
 */
class GetUsersFromTopMostOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUser
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUser[]
     */
    protected ?array $MidocoUser = null;
    /**
     * Constructor method for GetUsersFromTopMostOrgUnitResponse
     * @uses GetUsersFromTopMostOrgUnitResponse::setMidocoUser()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUser[] $midocoUser
     */
    public function __construct(?array $midocoUser = null)
    {
        $this
            ->setMidocoUser($midocoUser);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUser[]
     */
    public function getMidocoUser(): ?array
    {
        return $this->MidocoUser;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserForArrayConstraintsFromSetMidocoUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsersFromTopMostOrgUnitResponseMidocoUserItem) {
            // validation for constraint: itemType
            if (!$getUsersFromTopMostOrgUnitResponseMidocoUserItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUser) {
                $invalidValues[] = is_object($getUsersFromTopMostOrgUnitResponseMidocoUserItem) ? get_class($getUsersFromTopMostOrgUnitResponseMidocoUserItem) : sprintf('%s(%s)', gettype($getUsersFromTopMostOrgUnitResponseMidocoUserItem), var_export($getUsersFromTopMostOrgUnitResponseMidocoUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUser[] $midocoUser
     * @return \Pggns\MidocoApi\Crm\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function setMidocoUser(?array $midocoUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserArrayErrorMessage = self::validateMidocoUserForArrayConstraintsFromSetMidocoUser($midocoUser))) {
            throw new InvalidArgumentException($midocoUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
    /**
     * Add item to MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUser $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function addToMidocoUser(\Pggns\MidocoApi\Crm\StructType\MidocoUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUser) {
            throw new InvalidArgumentException(sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUser[] = $item;
        
        return $this;
    }
}
