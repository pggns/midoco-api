<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApplicationsForCurrentRoleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetApplicationsForCurrentRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoApplication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoApplication
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO[]
     */
    protected ?array $MidocoApplication = null;
    /**
     * Constructor method for GetApplicationsForCurrentRoleResponse
     * @uses GetApplicationsForCurrentRoleResponse::setMidocoApplication()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO[] $midocoApplication
     */
    public function __construct(?array $midocoApplication = null)
    {
        $this
            ->setMidocoApplication($midocoApplication);
    }
    /**
     * Get MidocoApplication value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO[]
     */
    public function getMidocoApplication(): ?array
    {
        return $this->MidocoApplication;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoApplication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoApplication method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoApplicationForArrayConstraintFromSetMidocoApplication(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getApplicationsForCurrentRoleResponseMidocoApplicationItem) {
            // validation for constraint: itemType
            if (!$getApplicationsForCurrentRoleResponseMidocoApplicationItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO) {
                $invalidValues[] = is_object($getApplicationsForCurrentRoleResponseMidocoApplicationItem) ? get_class($getApplicationsForCurrentRoleResponseMidocoApplicationItem) : sprintf('%s(%s)', gettype($getApplicationsForCurrentRoleResponseMidocoApplicationItem), var_export($getApplicationsForCurrentRoleResponseMidocoApplicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoApplication property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoApplication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO[] $midocoApplication
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleResponse
     */
    public function setMidocoApplication(?array $midocoApplication = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoApplicationArrayErrorMessage = self::validateMidocoApplicationForArrayConstraintFromSetMidocoApplication($midocoApplication))) {
            throw new InvalidArgumentException($midocoApplicationArrayErrorMessage, __LINE__);
        }
        $this->MidocoApplication = $midocoApplication;
        
        return $this;
    }
    /**
     * Add item to MidocoApplication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleResponse
     */
    public function addToMidocoApplication(\Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoApplication property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\ApplicationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoApplication[] = $item;
        
        return $this;
    }
}
