<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountryIsoTokenResponse StructType
 * @subpackage Structs
 */
class GetCountryIsoTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoCountryToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCountryToken
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO[]
     */
    protected ?array $MidocoCountryToken = null;
    /**
     * Constructor method for GetCountryIsoTokenResponse
     * @uses GetCountryIsoTokenResponse::setMidocoCountryToken()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO[] $midocoCountryToken
     */
    public function __construct(?array $midocoCountryToken = null)
    {
        $this
            ->setMidocoCountryToken($midocoCountryToken);
    }
    /**
     * Get MidocoCountryToken value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO[]
     */
    public function getMidocoCountryToken(): ?array
    {
        return $this->MidocoCountryToken;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCountryToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCountryToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCountryTokenForArrayConstraintsFromSetMidocoCountryToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCountryIsoTokenResponseMidocoCountryTokenItem) {
            // validation for constraint: itemType
            if (!$getCountryIsoTokenResponseMidocoCountryTokenItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO) {
                $invalidValues[] = is_object($getCountryIsoTokenResponseMidocoCountryTokenItem) ? get_class($getCountryIsoTokenResponseMidocoCountryTokenItem) : sprintf('%s(%s)', gettype($getCountryIsoTokenResponseMidocoCountryTokenItem), var_export($getCountryIsoTokenResponseMidocoCountryTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCountryToken property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCountryToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO[] $midocoCountryToken
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCountryIsoTokenResponse
     */
    public function setMidocoCountryToken(?array $midocoCountryToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCountryTokenArrayErrorMessage = self::validateMidocoCountryTokenForArrayConstraintsFromSetMidocoCountryToken($midocoCountryToken))) {
            throw new InvalidArgumentException($midocoCountryTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCountryToken = $midocoCountryToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCountryToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCountryIsoTokenResponse
     */
    public function addToMidocoCountryToken(\Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCountryToken property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CountryTokenDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCountryToken[] = $item;
        
        return $this;
    }
}
