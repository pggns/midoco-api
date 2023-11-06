<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningLetterRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDunningLetterRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for DeleteDunningLetterRequest
     * @uses DeleteDunningLetterRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Documents\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDunningLetterRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Documents\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}
