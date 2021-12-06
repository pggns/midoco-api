<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCriteriaFieldValueType StructType
 * @subpackage Structs
 */
class MidocoCriteriaFieldValueType extends AbstractStructBase
{
    /**
     * The valueFieldId
     * @var string|null
     */
    protected ?string $valueFieldId = null;
    /**
     * The localizedValueFieldToDisplay
     * @var string|null
     */
    protected ?string $localizedValueFieldToDisplay = null;
    /**
     * Constructor method for MidocoCriteriaFieldValueType
     * @uses MidocoCriteriaFieldValueType::setValueFieldId()
     * @uses MidocoCriteriaFieldValueType::setLocalizedValueFieldToDisplay()
     * @param string $valueFieldId
     * @param string $localizedValueFieldToDisplay
     */
    public function __construct(?string $valueFieldId = null, ?string $localizedValueFieldToDisplay = null)
    {
        $this
            ->setValueFieldId($valueFieldId)
            ->setLocalizedValueFieldToDisplay($localizedValueFieldToDisplay);
    }
    /**
     * Get valueFieldId value
     * @return string|null
     */
    public function getValueFieldId(): ?string
    {
        return $this->valueFieldId;
    }
    /**
     * Set valueFieldId value
     * @param string $valueFieldId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType
     */
    public function setValueFieldId(?string $valueFieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($valueFieldId) && !is_string($valueFieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueFieldId, true), gettype($valueFieldId)), __LINE__);
        }
        $this->valueFieldId = $valueFieldId;
        
        return $this;
    }
    /**
     * Get localizedValueFieldToDisplay value
     * @return string|null
     */
    public function getLocalizedValueFieldToDisplay(): ?string
    {
        return $this->localizedValueFieldToDisplay;
    }
    /**
     * Set localizedValueFieldToDisplay value
     * @param string $localizedValueFieldToDisplay
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType
     */
    public function setLocalizedValueFieldToDisplay(?string $localizedValueFieldToDisplay = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedValueFieldToDisplay) && !is_string($localizedValueFieldToDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedValueFieldToDisplay, true), gettype($localizedValueFieldToDisplay)), __LINE__);
        }
        $this->localizedValueFieldToDisplay = $localizedValueFieldToDisplay;
        
        return $this;
    }
}
