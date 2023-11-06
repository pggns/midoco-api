<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccessJasperReportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAccessJasperReportRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoAccessReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport[]
     */
    protected ?array $MidocoAccessReport = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for SaveAccessJasperReportRequest
     * @uses SaveAccessJasperReportRequest::setMidocoAccessReport()
     * @uses SaveAccessJasperReportRequest::setOrgUnit()
     * @uses SaveAccessJasperReportRequest::setRoleId()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport[] $midocoAccessReport
     * @param string $orgUnit
     * @param int $roleId
     */
    public function __construct(?array $midocoAccessReport = null, ?string $orgUnit = null, ?int $roleId = null)
    {
        $this
            ->setMidocoAccessReport($midocoAccessReport)
            ->setOrgUnit($orgUnit)
            ->setRoleId($roleId);
    }
    /**
     * Get MidocoAccessReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport[]
     */
    public function getMidocoAccessReport(): ?array
    {
        return $this->MidocoAccessReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAccessReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccessReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccessReportForArrayConstraintFromSetMidocoAccessReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveAccessJasperReportRequestMidocoAccessReportItem) {
            // validation for constraint: itemType
            if (!$saveAccessJasperReportRequestMidocoAccessReportItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport) {
                $invalidValues[] = is_object($saveAccessJasperReportRequestMidocoAccessReportItem) ? get_class($saveAccessJasperReportRequestMidocoAccessReportItem) : sprintf('%s(%s)', gettype($saveAccessJasperReportRequestMidocoAccessReportItem), var_export($saveAccessJasperReportRequestMidocoAccessReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccessReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccessReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport[] $midocoAccessReport
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest
     */
    public function setMidocoAccessReport(?array $midocoAccessReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccessReportArrayErrorMessage = self::validateMidocoAccessReportForArrayConstraintFromSetMidocoAccessReport($midocoAccessReport))) {
            throw new InvalidArgumentException($midocoAccessReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccessReport = $midocoAccessReport;
        
        return $this;
    }
    /**
     * Add item to MidocoAccessReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest
     */
    public function addToMidocoAccessReport(\Pggns\MidocoApi\Mis\StructType\MidocoAccessReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport) {
            throw new InvalidArgumentException(sprintf('The MidocoAccessReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoAccessReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccessReport[] = $item;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest
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
}
