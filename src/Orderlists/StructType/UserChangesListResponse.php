<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserChangesListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserChangesListResponse extends AbstractStructBase
{
    /**
     * The MidocoUserChangesList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType[]
     */
    protected ?array $MidocoUserChangesList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for UserChangesListResponse
     * @uses UserChangesListResponse::setMidocoUserChangesList()
     * @uses UserChangesListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType[] $midocoUserChangesList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoUserChangesList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoUserChangesList($midocoUserChangesList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoUserChangesList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType[]
     */
    public function getMidocoUserChangesList(): ?array
    {
        return $this->MidocoUserChangesList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUserChangesList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUserChangesList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserChangesListForArrayConstraintFromSetMidocoUserChangesList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $userChangesListResponseMidocoUserChangesListItem) {
            // validation for constraint: itemType
            if (!$userChangesListResponseMidocoUserChangesListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType) {
                $invalidValues[] = is_object($userChangesListResponseMidocoUserChangesListItem) ? get_class($userChangesListResponseMidocoUserChangesListItem) : sprintf('%s(%s)', gettype($userChangesListResponseMidocoUserChangesListItem), var_export($userChangesListResponseMidocoUserChangesListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUserChangesList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUserChangesList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType[] $midocoUserChangesList
     * @return \Pggns\MidocoApi\Orderlists\StructType\UserChangesListResponse
     */
    public function setMidocoUserChangesList(?array $midocoUserChangesList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserChangesListArrayErrorMessage = self::validateMidocoUserChangesListForArrayConstraintFromSetMidocoUserChangesList($midocoUserChangesList))) {
            throw new InvalidArgumentException($midocoUserChangesListArrayErrorMessage, __LINE__);
        }
        $this->MidocoUserChangesList = $midocoUserChangesList;
        
        return $this;
    }
    /**
     * Add item to MidocoUserChangesList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\UserChangesListResponse
     */
    public function addToMidocoUserChangesList(\Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType) {
            throw new InvalidArgumentException(sprintf('The MidocoUserChangesList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUserChangesList[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\UserChangesListResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
