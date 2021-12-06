<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningLetterRequest StructType
 * @subpackage Structs
 */
class DeleteDunningLetterRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for DeleteDunningLetterRequest
     * @uses DeleteDunningLetterRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningLetterRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}
