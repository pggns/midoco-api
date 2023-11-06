<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteQueryWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: executeQueryWS --- executes a query on the MIS db (for WS)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteQueryWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    protected ?array $MidocoMisCustomerResult = null;
    /**
     * The MidocoMisCampaignResultWS
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResultWS
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[]
     */
    protected ?array $MidocoMisCampaignResultWS = null;
    /**
     * The MidocoMisCampaignWS
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignWS
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $MidocoMisCampaignWS = null;
    /**
     * Constructor method for ExecuteQueryWSResponse
     * @uses ExecuteQueryWSResponse::setMidocoMisCustomerResult()
     * @uses ExecuteQueryWSResponse::setMidocoMisCampaignResultWS()
     * @uses ExecuteQueryWSResponse::setMidocoMisCampaignWS()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     */
    public function __construct(?array $midocoMisCustomerResult = null, ?array $midocoMisCampaignResultWS = null, ?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null)
    {
        $this
            ->setMidocoMisCustomerResult($midocoMisCustomerResult)
            ->setMidocoMisCampaignResultWS($midocoMisCampaignResultWS)
            ->setMidocoMisCampaignWS($midocoMisCampaignWS);
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    public function getMidocoMisCustomerResult(): ?array
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCustomerResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCustomerResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCustomerResultForArrayConstraintFromSetMidocoMisCustomerResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeQueryWSResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$executeQueryWSResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($executeQueryWSResponseMidocoMisCustomerResultItem) ? get_class($executeQueryWSResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($executeQueryWSResponseMidocoMisCustomerResultItem), var_export($executeQueryWSResponseMidocoMisCustomerResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function setMidocoMisCustomerResult(?array $midocoMisCustomerResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCustomerResultArrayErrorMessage = self::validateMidocoMisCustomerResultForArrayConstraintFromSetMidocoMisCustomerResult($midocoMisCustomerResult))) {
            throw new InvalidArgumentException($midocoMisCustomerResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function addToMidocoMisCustomerResult(\Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCustomerResult[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCampaignResultWS value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[]
     */
    public function getMidocoMisCampaignResultWS(): ?array
    {
        return $this->MidocoMisCampaignResultWS;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignResultWS method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResultWS method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultWSForArrayConstraintFromSetMidocoMisCampaignResultWS(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeQueryWSResponseMidocoMisCampaignResultWSItem) {
            // validation for constraint: itemType
            if (!$executeQueryWSResponseMidocoMisCampaignResultWSItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType) {
                $invalidValues[] = is_object($executeQueryWSResponseMidocoMisCampaignResultWSItem) ? get_class($executeQueryWSResponseMidocoMisCampaignResultWSItem) : sprintf('%s(%s)', gettype($executeQueryWSResponseMidocoMisCampaignResultWSItem), var_export($executeQueryWSResponseMidocoMisCampaignResultWSItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function setMidocoMisCampaignResultWS(?array $midocoMisCampaignResultWS = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultWSArrayErrorMessage = self::validateMidocoMisCampaignResultWSForArrayConstraintFromSetMidocoMisCampaignResultWS($midocoMisCampaignResultWS))) {
            throw new InvalidArgumentException($midocoMisCampaignResultWSArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResultWS = $midocoMisCampaignResultWS;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType $item
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function addToMidocoMisCampaignResultWS(\Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResultWS[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCampaignWS value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType|null
     */
    public function getMidocoMisCampaignWS(): ?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType
    {
        return $this->MidocoMisCampaignWS;
    }
    /**
     * Set MidocoMisCampaignWS value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function setMidocoMisCampaignWS(?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null): self
    {
        $this->MidocoMisCampaignWS = $midocoMisCampaignWS;
        
        return $this;
    }
}
