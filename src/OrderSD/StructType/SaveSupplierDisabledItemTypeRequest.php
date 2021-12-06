<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDisabledItemTypeRequest StructType
 * @subpackage Structs
 */
class SaveSupplierDisabledItemTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDisabledItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDisabledItemType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType $MidocoSupplierDisabledItemType = null;
    /**
     * Constructor method for SaveSupplierDisabledItemTypeRequest
     * @uses SaveSupplierDisabledItemTypeRequest::setMidocoSupplierDisabledItemType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null)
    {
        $this
            ->setMidocoSupplierDisabledItemType($midocoSupplierDisabledItemType);
    }
    /**
     * Get MidocoSupplierDisabledItemType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType|null
     */
    public function getMidocoSupplierDisabledItemType(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType
    {
        return $this->MidocoSupplierDisabledItemType;
    }
    /**
     * Set MidocoSupplierDisabledItemType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledItemTypeRequest
     */
    public function setMidocoSupplierDisabledItemType(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null): self
    {
        $this->MidocoSupplierDisabledItemType = $midocoSupplierDisabledItemType;
        
        return $this;
    }
}
