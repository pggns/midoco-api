<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTourOperatorDisabledUnitsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: MIDOCO-38078: TourOparatorId can't be set/used with the InsurerId at the same time. To avoid to create 2 Cmds it was implemented in 1 Cmd
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTourOperatorDisabledUnitsRequest extends AbstractStructBase
{
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $disabledUnitName = null;
    /**
     * Constructor method for DeleteTourOperatorDisabledUnitsRequest
     * @uses DeleteTourOperatorDisabledUnitsRequest::setTouroperatorId()
     * @uses DeleteTourOperatorDisabledUnitsRequest::setInsurerId()
     * @uses DeleteTourOperatorDisabledUnitsRequest::setDisabledUnitName()
     * @param int $touroperatorId
     * @param int $insurerId
     * @param string[] $disabledUnitName
     */
    public function __construct(?int $touroperatorId = null, ?int $insurerId = null, ?array $disabledUnitName = null)
    {
        $this
            ->setTouroperatorId($touroperatorId)
            ->setInsurerId($insurerId)
            ->setDisabledUnitName($disabledUnitName);
    }
    /**
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorDisabledUnitsRequest
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
        return $this;
    }
    /**
     * Get insurerId value
     * @return int|null
     */
    public function getInsurerId(): ?int
    {
        return $this->insurerId;
    }
    /**
     * Set insurerId value
     * @param int $insurerId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorDisabledUnitsRequest
     */
    public function setInsurerId(?int $insurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurerId) && !(is_int($insurerId) || ctype_digit($insurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurerId, true), gettype($insurerId)), __LINE__);
        }
        $this->insurerId = $insurerId;
        
        return $this;
    }
    /**
     * Get disabledUnitName value
     * @return string[]
     */
    public function getDisabledUnitName(): ?array
    {
        return $this->disabledUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem)) {
                $invalidValues[] = is_object($deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem) ? get_class($deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem) : sprintf('%s(%s)', gettype($deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem), var_export($deleteTourOperatorDisabledUnitsRequestDisabledUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set disabledUnitName value
     * @throws InvalidArgumentException
     * @param string[] $disabledUnitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorDisabledUnitsRequest
     */
    public function setDisabledUnitName(?array $disabledUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($disabledUnitNameArrayErrorMessage = self::validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName($disabledUnitName))) {
            throw new InvalidArgumentException($disabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Add item to disabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorDisabledUnitsRequest
     */
    public function addToDisabledUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->disabledUnitName[] = $item;
        
        return $this;
    }
}
