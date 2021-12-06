<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDebitCardTypeRequest StructType
 * @subpackage Structs
 */
class DeleteDebitCardTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitCardType
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitCardType
     * @var \Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO $MidocoDebitCardType = null;
    /**
     * Constructor method for DeleteDebitCardTypeRequest
     * @uses DeleteDebitCardTypeRequest::setMidocoDebitCardType()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO $midocoDebitCardType
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO $midocoDebitCardType = null)
    {
        $this
            ->setMidocoDebitCardType($midocoDebitCardType);
    }
    /**
     * Get MidocoDebitCardType value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO|null
     */
    public function getMidocoDebitCardType(): ?\Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO
    {
        return $this->MidocoDebitCardType;
    }
    /**
     * Set MidocoDebitCardType value
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO $midocoDebitCardType
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteDebitCardTypeRequest
     */
    public function setMidocoDebitCardType(?\Pggns\MidocoApi\CrmSD\StructType\DebitCardTypeDTO $midocoDebitCardType = null): self
    {
        $this->MidocoDebitCardType = $midocoDebitCardType;
        
        return $this;
    }
}
