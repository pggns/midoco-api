<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupAdvisorInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGroupAdvisorInfoResponse extends AbstractStructBase
{
    /**
     * The GroupAdvisorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo[]
     */
    protected ?array $GroupAdvisorInfo = null;
    /**
     * The GroupAdvisorInfoSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $GroupAdvisorInfoSum = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for GetGroupAdvisorInfoResponse
     * @uses GetGroupAdvisorInfoResponse::setGroupAdvisorInfo()
     * @uses GetGroupAdvisorInfoResponse::setGroupAdvisorInfoSum()
     * @uses GetGroupAdvisorInfoResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo[] $groupAdvisorInfo
     * @param \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $groupAdvisorInfoSum
     * @param int $noOfResults
     */
    public function __construct(?array $groupAdvisorInfo = null, ?\Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $groupAdvisorInfoSum = null, ?int $noOfResults = null)
    {
        $this
            ->setGroupAdvisorInfo($groupAdvisorInfo)
            ->setGroupAdvisorInfoSum($groupAdvisorInfoSum)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get GroupAdvisorInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo[]
     */
    public function getGroupAdvisorInfo(): ?array
    {
        return $this->GroupAdvisorInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGroupAdvisorInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupAdvisorInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupAdvisorInfoForArrayConstraintFromSetGroupAdvisorInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGroupAdvisorInfoResponseGroupAdvisorInfoItem) {
            // validation for constraint: itemType
            if (!$getGroupAdvisorInfoResponseGroupAdvisorInfoItem instanceof \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo) {
                $invalidValues[] = is_object($getGroupAdvisorInfoResponseGroupAdvisorInfoItem) ? get_class($getGroupAdvisorInfoResponseGroupAdvisorInfoItem) : sprintf('%s(%s)', gettype($getGroupAdvisorInfoResponseGroupAdvisorInfoItem), var_export($getGroupAdvisorInfoResponseGroupAdvisorInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupAdvisorInfo property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupAdvisorInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo[] $groupAdvisorInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse
     */
    public function setGroupAdvisorInfo(?array $groupAdvisorInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupAdvisorInfoArrayErrorMessage = self::validateGroupAdvisorInfoForArrayConstraintFromSetGroupAdvisorInfo($groupAdvisorInfo))) {
            throw new InvalidArgumentException($groupAdvisorInfoArrayErrorMessage, __LINE__);
        }
        $this->GroupAdvisorInfo = $groupAdvisorInfo;
        
        return $this;
    }
    /**
     * Add item to GroupAdvisorInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse
     */
    public function addToGroupAdvisorInfo(\Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo) {
            throw new InvalidArgumentException(sprintf('The GroupAdvisorInfo property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GroupAdvisorInfo[] = $item;
        
        return $this;
    }
    /**
     * Get GroupAdvisorInfoSum value
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo|null
     */
    public function getGroupAdvisorInfoSum(): ?\Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
    {
        return $this->GroupAdvisorInfoSum;
    }
    /**
     * Set GroupAdvisorInfoSum value
     * @param \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $groupAdvisorInfoSum
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse
     */
    public function setGroupAdvisorInfoSum(?\Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo $groupAdvisorInfoSum = null): self
    {
        $this->GroupAdvisorInfoSum = $groupAdvisorInfoSum;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse
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
