<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GrantPrintsToRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GrantPrintsToRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintDescription
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    protected ?array $MidocoPrintDescription = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The printDestId
     * @var string|null
     */
    protected ?string $printDestId = null;
    /**
     * Constructor method for GrantPrintsToRemarkRequest
     * @uses GrantPrintsToRemarkRequest::setMidocoPrintDescription()
     * @uses GrantPrintsToRemarkRequest::setUnitName()
     * @uses GrantPrintsToRemarkRequest::setPrintDestId()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @param string $unitName
     * @param string $printDestId
     */
    public function __construct(?array $midocoPrintDescription = null, ?string $unitName = null, ?string $printDestId = null)
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription)
            ->setUnitName($unitName)
            ->setPrintDestId($printDestId);
    }
    /**
     * Get MidocoPrintDescription value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    public function getMidocoPrintDescription(): ?array
    {
        return $this->MidocoPrintDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintDescriptionForArrayConstraintFromSetMidocoPrintDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $grantPrintsToRemarkRequestMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$grantPrintsToRemarkRequestMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($grantPrintsToRemarkRequestMidocoPrintDescriptionItem) ? get_class($grantPrintsToRemarkRequestMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($grantPrintsToRemarkRequestMidocoPrintDescriptionItem), var_export($grantPrintsToRemarkRequestMidocoPrintDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GrantPrintsToRemarkRequest
     */
    public function setMidocoPrintDescription(?array $midocoPrintDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintDescriptionArrayErrorMessage = self::validateMidocoPrintDescriptionForArrayConstraintFromSetMidocoPrintDescription($midocoPrintDescription))) {
            throw new InvalidArgumentException($midocoPrintDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintDescription = $midocoPrintDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GrantPrintsToRemarkRequest
     */
    public function addToMidocoPrintDescription(\Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintDescription[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GrantPrintsToRemarkRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get printDestId value
     * @return string|null
     */
    public function getPrintDestId(): ?string
    {
        return $this->printDestId;
    }
    /**
     * Set printDestId value
     * @param string $printDestId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GrantPrintsToRemarkRequest
     */
    public function setPrintDestId(?string $printDestId = null): self
    {
        // validation for constraint: string
        if (!is_null($printDestId) && !is_string($printDestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDestId, true), gettype($printDestId)), __LINE__);
        }
        $this->printDestId = $printDestId;
        
        return $this;
    }
}
