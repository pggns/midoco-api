<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApplicationsForCurrentRoleResponse StructType
 * @subpackage Structs
 */
class GetApplicationsForCurrentRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoApplication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoApplication
     * @var \Pggns\MidocoApi\System\StructType\ApplicationDTO[]
     */
    protected ?array $MidocoApplication = null;
    /**
     * Constructor method for GetApplicationsForCurrentRoleResponse
     * @uses GetApplicationsForCurrentRoleResponse::setMidocoApplication()
     * @param \Pggns\MidocoApi\System\StructType\ApplicationDTO[] $midocoApplication
     */
    public function __construct(?array $midocoApplication = null)
    {
        $this
            ->setMidocoApplication($midocoApplication);
    }
    /**
     * Get MidocoApplication value
     * @return \Pggns\MidocoApi\System\StructType\ApplicationDTO[]
     */
    public function getMidocoApplication(): ?array
    {
        return $this->MidocoApplication;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoApplication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoApplication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoApplicationForArrayConstraintsFromSetMidocoApplication(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getApplicationsForCurrentRoleResponseMidocoApplicationItem) {
            // validation for constraint: itemType
            if (!$getApplicationsForCurrentRoleResponseMidocoApplicationItem instanceof \Pggns\MidocoApi\System\StructType\ApplicationDTO) {
                $invalidValues[] = is_object($getApplicationsForCurrentRoleResponseMidocoApplicationItem) ? get_class($getApplicationsForCurrentRoleResponseMidocoApplicationItem) : sprintf('%s(%s)', gettype($getApplicationsForCurrentRoleResponseMidocoApplicationItem), var_export($getApplicationsForCurrentRoleResponseMidocoApplicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoApplication property can only contain items of type \Pggns\MidocoApi\System\StructType\ApplicationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoApplication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\ApplicationDTO[] $midocoApplication
     * @return \Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleResponse
     */
    public function setMidocoApplication(?array $midocoApplication = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoApplicationArrayErrorMessage = self::validateMidocoApplicationForArrayConstraintsFromSetMidocoApplication($midocoApplication))) {
            throw new InvalidArgumentException($midocoApplicationArrayErrorMessage, __LINE__);
        }
        $this->MidocoApplication = $midocoApplication;
        
        return $this;
    }
    /**
     * Add item to MidocoApplication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\ApplicationDTO $item
     * @return \Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleResponse
     */
    public function addToMidocoApplication(\Pggns\MidocoApi\System\StructType\ApplicationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\ApplicationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoApplication property can only contain items of type \Pggns\MidocoApi\System\StructType\ApplicationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoApplication[] = $item;
        
        return $this;
    }
}
