<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitEmailSigListResponse StructType
 * @subpackage Structs
 */
class GetOrgunitEmailSigListResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitEmailSig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunitEmailSig
     * @var \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO[]
     */
    protected ?array $MidocoOrgunitEmailSig = null;
    /**
     * Constructor method for GetOrgunitEmailSigListResponse
     * @uses GetOrgunitEmailSigListResponse::setMidocoOrgunitEmailSig()
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO[] $midocoOrgunitEmailSig
     */
    public function __construct(?array $midocoOrgunitEmailSig = null)
    {
        $this
            ->setMidocoOrgunitEmailSig($midocoOrgunitEmailSig);
    }
    /**
     * Get MidocoOrgunitEmailSig value
     * @return \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO[]
     */
    public function getMidocoOrgunitEmailSig(): ?array
    {
        return $this->MidocoOrgunitEmailSig;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunitEmailSig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitEmailSig method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitEmailSigForArrayConstraintsFromSetMidocoOrgunitEmailSig(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem) {
            // validation for constraint: itemType
            if (!$getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem instanceof \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO) {
                $invalidValues[] = is_object($getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem) ? get_class($getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem) : sprintf('%s(%s)', gettype($getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem), var_export($getOrgunitEmailSigListResponseMidocoOrgunitEmailSigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitEmailSig property can only contain items of type \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitEmailSig value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO[] $midocoOrgunitEmailSig
     * @return \Pggns\MidocoApi\Crm\StructType\GetOrgunitEmailSigListResponse
     */
    public function setMidocoOrgunitEmailSig(?array $midocoOrgunitEmailSig = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitEmailSigArrayErrorMessage = self::validateMidocoOrgunitEmailSigForArrayConstraintsFromSetMidocoOrgunitEmailSig($midocoOrgunitEmailSig))) {
            throw new InvalidArgumentException($midocoOrgunitEmailSigArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitEmailSig = $midocoOrgunitEmailSig;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitEmailSig value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetOrgunitEmailSigListResponse
     */
    public function addToMidocoOrgunitEmailSig(\Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitEmailSig property can only contain items of type \Pggns\MidocoApi\Crm\StructType\OrgunitEmailSigDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitEmailSig[] = $item;
        
        return $this;
    }
}
