<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoGuiAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
class GetMidocoGuiAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The GUIAttributeGroup
     * Meta information extracted from the WSDL
     * - ref: GUIAttributeGroup
     * @var string|null
     */
    protected ?string $GUIAttributeGroup = null;
    /**
     * Constructor method for GetMidocoGuiAttributeDefinitionRequest
     * @uses GetMidocoGuiAttributeDefinitionRequest::setGUIAttributeGroup()
     * @param string $gUIAttributeGroup
     */
    public function __construct(?string $gUIAttributeGroup = null)
    {
        $this
            ->setGUIAttributeGroup($gUIAttributeGroup);
    }
    /**
     * Get GUIAttributeGroup value
     * @return string|null
     */
    public function getGUIAttributeGroup(): ?string
    {
        return $this->GUIAttributeGroup;
    }
    /**
     * Set GUIAttributeGroup value
     * @uses \Pggns\MidocoApi\Api\OrderglobalSD\EnumType\GUIAttributeGroup::valueIsValid()
     * @uses \Pggns\MidocoApi\Api\OrderglobalSD\EnumType\GUIAttributeGroup::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gUIAttributeGroup
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMidocoGuiAttributeDefinitionRequest
     */
    public function setGUIAttributeGroup(?string $gUIAttributeGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Api\OrderglobalSD\EnumType\GUIAttributeGroup::valueIsValid($gUIAttributeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Api\OrderglobalSD\EnumType\GUIAttributeGroup', is_array($gUIAttributeGroup) ? implode(', ', $gUIAttributeGroup) : var_export($gUIAttributeGroup, true), implode(', ', \Pggns\MidocoApi\Api\OrderglobalSD\EnumType\GUIAttributeGroup::getValidValues())), __LINE__);
        }
        $this->GUIAttributeGroup = $gUIAttributeGroup;
        
        return $this;
    }
}
