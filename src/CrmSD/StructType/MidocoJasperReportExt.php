<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperReportExt StructType
 * @subpackage Structs
 */
class MidocoJasperReportExt extends JasperReportDTO
{
    /**
     * The MidocoJasperReportParamForExec
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReportParamForExec
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec[]
     */
    protected ?array $MidocoJasperReportParamForExec = null;
    /**
     * Constructor method for MidocoJasperReportExt
     * @uses MidocoJasperReportExt::setMidocoJasperReportParamForExec()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec[] $midocoJasperReportParamForExec
     */
    public function __construct(?array $midocoJasperReportParamForExec = null)
    {
        $this
            ->setMidocoJasperReportParamForExec($midocoJasperReportParamForExec);
    }
    /**
     * Get MidocoJasperReportParamForExec value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec[]
     */
    public function getMidocoJasperReportParamForExec(): ?array
    {
        return $this->MidocoJasperReportParamForExec;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParamForExec method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamForExec method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamForExecForArrayConstraintsFromSetMidocoJasperReportParamForExec(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperReportExtMidocoJasperReportParamForExecItem) {
            // validation for constraint: itemType
            if (!$midocoJasperReportExtMidocoJasperReportParamForExecItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec) {
                $invalidValues[] = is_object($midocoJasperReportExtMidocoJasperReportParamForExecItem) ? get_class($midocoJasperReportExtMidocoJasperReportParamForExecItem) : sprintf('%s(%s)', gettype($midocoJasperReportExtMidocoJasperReportParamForExecItem), var_export($midocoJasperReportExtMidocoJasperReportParamForExecItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamForExec property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamForExec value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec[] $midocoJasperReportParamForExec
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportExt
     */
    public function setMidocoJasperReportParamForExec(?array $midocoJasperReportParamForExec = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamForExecArrayErrorMessage = self::validateMidocoJasperReportParamForExecForArrayConstraintsFromSetMidocoJasperReportParamForExec($midocoJasperReportParamForExec))) {
            throw new InvalidArgumentException($midocoJasperReportParamForExecArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamForExec = $midocoJasperReportParamForExec;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamForExec value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportExt
     */
    public function addToMidocoJasperReportParamForExec(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamForExec property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoJasperReportParamForExec, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamForExec[] = $item;
        
        return $this;
    }
}
