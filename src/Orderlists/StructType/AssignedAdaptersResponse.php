<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedAdaptersResponse StructType
 * @subpackage Structs
 */
class AssignedAdaptersResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapter
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO[]
     */
    protected ?array $MidocoAdapter = null;
    /**
     * Constructor method for AssignedAdaptersResponse
     * @uses AssignedAdaptersResponse::setMidocoAdapter()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO[] $midocoAdapter
     */
    public function __construct(?array $midocoAdapter = null)
    {
        $this
            ->setMidocoAdapter($midocoAdapter);
    }
    /**
     * Get MidocoAdapter value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO[]
     */
    public function getMidocoAdapter(): ?array
    {
        return $this->MidocoAdapter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignedAdaptersResponseMidocoAdapterItem) {
            // validation for constraint: itemType
            if (!$assignedAdaptersResponseMidocoAdapterItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO) {
                $invalidValues[] = is_object($assignedAdaptersResponseMidocoAdapterItem) ? get_class($assignedAdaptersResponseMidocoAdapterItem) : sprintf('%s(%s)', gettype($assignedAdaptersResponseMidocoAdapterItem), var_export($assignedAdaptersResponseMidocoAdapterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO[] $midocoAdapter
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AssignedAdaptersResponse
     */
    public function setMidocoAdapter(?array $midocoAdapter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterArrayErrorMessage = self::validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter($midocoAdapter))) {
            throw new InvalidArgumentException($midocoAdapterArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapter = $midocoAdapter;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AssignedAdaptersResponse
     */
    public function addToMidocoAdapter(\Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\AdapterDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapter[] = $item;
        
        return $this;
    }
}
