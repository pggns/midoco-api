<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchUserRequest extends AbstractStructBase
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoUser
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $MidocoUser = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The roleId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $roleId = null;
    /**
     * The crsExpedient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $crsExpedient = null;
    /**
     * The crsExpedientText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsExpedientText = null;
    /**
     * The userAttribute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $userAttribute = null;
    /**
     * Constructor method for SearchUserRequest
     * @uses SearchUserRequest::setMidocoUser()
     * @uses SearchUserRequest::setUnitName()
     * @uses SearchUserRequest::setRoleId()
     * @uses SearchUserRequest::setCrsExpedient()
     * @uses SearchUserRequest::setCrsExpedientText()
     * @uses SearchUserRequest::setUserAttribute()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $midocoUser
     * @param string[] $unitName
     * @param int[] $roleId
     * @param string[] $crsExpedient
     * @param string $crsExpedientText
     * @param string $userAttribute
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $midocoUser = null, ?array $unitName = null, ?array $roleId = null, ?array $crsExpedient = null, ?string $crsExpedientText = null, ?string $userAttribute = null)
    {
        $this
            ->setMidocoUser($midocoUser)
            ->setUnitName($unitName)
            ->setRoleId($roleId)
            ->setCrsExpedient($crsExpedient)
            ->setCrsExpedientText($crsExpedientText)
            ->setUserAttribute($userAttribute);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser|null
     */
    public function getMidocoUser(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser
    {
        return $this->MidocoUser;
    }
    /**
     * Set MidocoUser value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $midocoUser
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setMidocoUser(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUser $midocoUser = null): self
    {
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchUserRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($searchUserRequestUnitNameItem)) {
                $invalidValues[] = is_object($searchUserRequestUnitNameItem) ? get_class($searchUserRequestUnitNameItem) : sprintf('%s(%s)', gettype($searchUserRequestUnitNameItem), var_export($searchUserRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get roleId value
     * @return int[]
     */
    public function getRoleId(): ?array
    {
        return $this->roleId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoleId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoleId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoleIdForArrayConstraintFromSetRoleId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchUserRequestRoleIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchUserRequestRoleIdItem) || ctype_digit($searchUserRequestRoleIdItem))) {
                $invalidValues[] = is_object($searchUserRequestRoleIdItem) ? get_class($searchUserRequestRoleIdItem) : sprintf('%s(%s)', gettype($searchUserRequestRoleIdItem), var_export($searchUserRequestRoleIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roleId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roleId value
     * @throws InvalidArgumentException
     * @param int[] $roleId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setRoleId(?array $roleId = null): self
    {
        // validation for constraint: array
        if ('' !== ($roleIdArrayErrorMessage = self::validateRoleIdForArrayConstraintFromSetRoleId($roleId))) {
            throw new InvalidArgumentException($roleIdArrayErrorMessage, __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
    /**
     * Add item to roleId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function addToRoleId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The roleId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roleId[] = $item;
        
        return $this;
    }
    /**
     * Get crsExpedient value
     * @return string[]
     */
    public function getCrsExpedient(): ?array
    {
        return $this->crsExpedient;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCrsExpedient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrsExpedient method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrsExpedientForArrayConstraintFromSetCrsExpedient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchUserRequestCrsExpedientItem) {
            // validation for constraint: itemType
            if (!is_string($searchUserRequestCrsExpedientItem)) {
                $invalidValues[] = is_object($searchUserRequestCrsExpedientItem) ? get_class($searchUserRequestCrsExpedientItem) : sprintf('%s(%s)', gettype($searchUserRequestCrsExpedientItem), var_export($searchUserRequestCrsExpedientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The crsExpedient property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set crsExpedient value
     * @throws InvalidArgumentException
     * @param string[] $crsExpedient
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setCrsExpedient(?array $crsExpedient = null): self
    {
        // validation for constraint: array
        if ('' !== ($crsExpedientArrayErrorMessage = self::validateCrsExpedientForArrayConstraintFromSetCrsExpedient($crsExpedient))) {
            throw new InvalidArgumentException($crsExpedientArrayErrorMessage, __LINE__);
        }
        $this->crsExpedient = $crsExpedient;
        
        return $this;
    }
    /**
     * Add item to crsExpedient value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function addToCrsExpedient(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The crsExpedient property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->crsExpedient[] = $item;
        
        return $this;
    }
    /**
     * Get crsExpedientText value
     * @return string|null
     */
    public function getCrsExpedientText(): ?string
    {
        return $this->crsExpedientText;
    }
    /**
     * Set crsExpedientText value
     * @param string $crsExpedientText
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setCrsExpedientText(?string $crsExpedientText = null): self
    {
        // validation for constraint: string
        if (!is_null($crsExpedientText) && !is_string($crsExpedientText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsExpedientText, true), gettype($crsExpedientText)), __LINE__);
        }
        $this->crsExpedientText = $crsExpedientText;
        
        return $this;
    }
    /**
     * Get userAttribute value
     * @return string|null
     */
    public function getUserAttribute(): ?string
    {
        return $this->userAttribute;
    }
    /**
     * Set userAttribute value
     * @param string $userAttribute
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchUserRequest
     */
    public function setUserAttribute(?string $userAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($userAttribute) && !is_string($userAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userAttribute, true), gettype($userAttribute)), __LINE__);
        }
        $this->userAttribute = $userAttribute;
        
        return $this;
    }
}
