<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoPrintOptionRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoPrintOptionRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintOption
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintOption
     * @var \Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO $MidocoPrintOption = null;
    /**
     * Constructor method for DeleteMidocoPrintOptionRequest
     * @uses DeleteMidocoPrintOptionRequest::setMidocoPrintOption()
     * @param \Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO $midocoPrintOption
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO $midocoPrintOption = null)
    {
        $this
            ->setMidocoPrintOption($midocoPrintOption);
    }
    /**
     * Get MidocoPrintOption value
     * @return \Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO|null
     */
    public function getMidocoPrintOption(): ?\Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO
    {
        return $this->MidocoPrintOption;
    }
    /**
     * Set MidocoPrintOption value
     * @param \Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO $midocoPrintOption
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoPrintOptionRequest
     */
    public function setMidocoPrintOption(?\Pggns\MidocoApi\OrderSD\StructType\PrintOptionDTO $midocoPrintOption = null): self
    {
        $this->MidocoPrintOption = $midocoPrintOption;
        
        return $this;
    }
}
