<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisAccessRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMisAccessRequest extends AbstractStructBase
{
    /**
     * The MidocoMisReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[]
     */
    protected ?array $MidocoMisReport = null;
    /**
     * The MidocoMisDimension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisDimension
     * @var \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    protected ?array $MidocoMisDimension = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for SaveMisAccessRequest
     * @uses SaveMisAccessRequest::setMidocoMisReport()
     * @uses SaveMisAccessRequest::setMidocoMisDimension()
     * @uses SaveMisAccessRequest::setRoleId()
     * @uses SaveMisAccessRequest::setOrgUnit()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[] $midocoMisReport
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @param int $roleId
     * @param string $orgUnit
     */
    public function __construct(?array $midocoMisReport = null, ?array $midocoMisDimension = null, ?int $roleId = null, ?string $orgUnit = null)
    {
        $this
            ->setMidocoMisReport($midocoMisReport)
            ->setMidocoMisDimension($midocoMisDimension)
            ->setRoleId($roleId)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get MidocoMisReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[]
     */
    public function getMidocoMisReport(): ?array
    {
        return $this->MidocoMisReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisReportForArrayConstraintFromSetMidocoMisReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMisAccessRequestMidocoMisReportItem) {
            // validation for constraint: itemType
            if (!$saveMisAccessRequestMidocoMisReportItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReport) {
                $invalidValues[] = is_object($saveMisAccessRequestMidocoMisReportItem) ? get_class($saveMisAccessRequestMidocoMisReportItem) : sprintf('%s(%s)', gettype($saveMisAccessRequestMidocoMisReportItem), var_export($saveMisAccessRequestMidocoMisReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[] $midocoMisReport
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function setMidocoMisReport(?array $midocoMisReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisReportArrayErrorMessage = self::validateMidocoMisReportForArrayConstraintFromSetMidocoMisReport($midocoMisReport))) {
            throw new InvalidArgumentException($midocoMisReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisReport = $midocoMisReport;
        
        return $this;
    }
    /**
     * Add item to MidocoMisReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function addToMidocoMisReport(\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReport) {
            throw new InvalidArgumentException(sprintf('The MidocoMisReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisReport[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisDimension value
     * @return \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    public function getMidocoMisDimension(): ?array
    {
        return $this->MidocoMisDimension;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisDimension method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMisAccessRequestMidocoMisDimensionItem) {
            // validation for constraint: itemType
            if (!$saveMisAccessRequestMidocoMisDimensionItem instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
                $invalidValues[] = is_object($saveMisAccessRequestMidocoMisDimensionItem) ? get_class($saveMisAccessRequestMidocoMisDimensionItem) : sprintf('%s(%s)', gettype($saveMisAccessRequestMidocoMisDimensionItem), var_export($saveMisAccessRequestMidocoMisDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function setMidocoMisDimension(?array $midocoMisDimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisDimensionArrayErrorMessage = self::validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension($midocoMisDimension))) {
            throw new InvalidArgumentException($midocoMisDimensionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisDimension = $midocoMisDimension;
        
        return $this;
    }
    /**
     * Add item to MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function addToMidocoMisDimension(\Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisDimension[] = $item;
        
        return $this;
    }
    /**
     * Get roleId value
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param int $roleId
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function setRoleId(?int $roleId = null): self
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisAccessRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
