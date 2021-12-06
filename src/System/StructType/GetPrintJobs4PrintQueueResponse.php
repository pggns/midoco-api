<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintJobs4PrintQueueResponse StructType
 * @subpackage Structs
 */
class GetPrintJobs4PrintQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjobInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTempPrintjobInfo
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo[]
     */
    protected ?array $MidocoTempPrintjobInfo = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The lockedUserId
     * @var int|null
     */
    protected ?int $lockedUserId = null;
    /**
     * Constructor method for GetPrintJobs4PrintQueueResponse
     * @uses GetPrintJobs4PrintQueueResponse::setMidocoTempPrintjobInfo()
     * @uses GetPrintJobs4PrintQueueResponse::setLocked()
     * @uses GetPrintJobs4PrintQueueResponse::setLockedUserId()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     * @param bool $locked
     * @param int $lockedUserId
     */
    public function __construct(?array $midocoTempPrintjobInfo = null, ?bool $locked = null, ?int $lockedUserId = null)
    {
        $this
            ->setMidocoTempPrintjobInfo($midocoTempPrintjobInfo)
            ->setLocked($locked)
            ->setLockedUserId($lockedUserId);
    }
    /**
     * Get MidocoTempPrintjobInfo value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo[]
     */
    public function getMidocoTempPrintjobInfo(): ?array
    {
        return $this->MidocoTempPrintjobInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTempPrintjobInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTempPrintjobInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTempPrintjobInfoForArrayConstraintsFromSetMidocoTempPrintjobInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem) {
            // validation for constraint: itemType
            if (!$getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo) {
                $invalidValues[] = is_object($getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem) ? get_class($getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem) : sprintf('%s(%s)', gettype($getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem), var_export($getPrintJobs4PrintQueueResponseMidocoTempPrintjobInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     * @return \Pggns\MidocoApi\Api\System\StructType\GetPrintJobs4PrintQueueResponse
     */
    public function setMidocoTempPrintjobInfo(?array $midocoTempPrintjobInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTempPrintjobInfoArrayErrorMessage = self::validateMidocoTempPrintjobInfoForArrayConstraintsFromSetMidocoTempPrintjobInfo($midocoTempPrintjobInfo))) {
            throw new InvalidArgumentException($midocoTempPrintjobInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoTempPrintjobInfo = $midocoTempPrintjobInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo $item
     * @return \Pggns\MidocoApi\Api\System\StructType\GetPrintJobs4PrintQueueResponse
     */
    public function addToMidocoTempPrintjobInfo(\Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoTempPrintjobInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTempPrintjobInfo[] = $item;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Api\System\StructType\GetPrintJobs4PrintQueueResponse
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get lockedUserId value
     * @return int|null
     */
    public function getLockedUserId(): ?int
    {
        return $this->lockedUserId;
    }
    /**
     * Set lockedUserId value
     * @param int $lockedUserId
     * @return \Pggns\MidocoApi\Api\System\StructType\GetPrintJobs4PrintQueueResponse
     */
    public function setLockedUserId(?int $lockedUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($lockedUserId) && !(is_int($lockedUserId) || ctype_digit($lockedUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockedUserId, true), gettype($lockedUserId)), __LINE__);
        }
        $this->lockedUserId = $lockedUserId;
        
        return $this;
    }
}
