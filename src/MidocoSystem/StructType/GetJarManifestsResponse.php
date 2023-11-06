<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJarManifestsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns manifest attributes of jar files created during build
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJarManifestsResponse extends AbstractStructBase
{
    /**
     * The JarManifest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest[]
     */
    protected ?array $JarManifest = null;
    /**
     * Constructor method for GetJarManifestsResponse
     * @uses GetJarManifestsResponse::setJarManifest()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest[] $jarManifest
     */
    public function __construct(?array $jarManifest = null)
    {
        $this
            ->setJarManifest($jarManifest);
    }
    /**
     * Get JarManifest value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest[]
     */
    public function getJarManifest(): ?array
    {
        return $this->JarManifest;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJarManifest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJarManifest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJarManifestForArrayConstraintFromSetJarManifest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getJarManifestsResponseJarManifestItem) {
            // validation for constraint: itemType
            if (!$getJarManifestsResponseJarManifestItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest) {
                $invalidValues[] = is_object($getJarManifestsResponseJarManifestItem) ? get_class($getJarManifestsResponseJarManifestItem) : sprintf('%s(%s)', gettype($getJarManifestsResponseJarManifestItem), var_export($getJarManifestsResponseJarManifestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JarManifest property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JarManifest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest[] $jarManifest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetJarManifestsResponse
     */
    public function setJarManifest(?array $jarManifest = null): self
    {
        // validation for constraint: array
        if ('' !== ($jarManifestArrayErrorMessage = self::validateJarManifestForArrayConstraintFromSetJarManifest($jarManifest))) {
            throw new InvalidArgumentException($jarManifestArrayErrorMessage, __LINE__);
        }
        $this->JarManifest = $jarManifest;
        
        return $this;
    }
    /**
     * Add item to JarManifest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetJarManifestsResponse
     */
    public function addToJarManifest(\Pggns\MidocoApi\MidocoSystem\StructType\JarManifest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest) {
            throw new InvalidArgumentException(sprintf('The JarManifest property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JarManifest[] = $item;
        
        return $this;
    }
}
