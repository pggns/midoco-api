<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderNoticeWithUser StructType
 * @subpackage Structs
 */
class MidocoOrderNoticeWithUser extends OrderNoticeDTO
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - ref: system:MidocoUser
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoUser|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoUser $MidocoUser = null;
    /**
     * Constructor method for MidocoOrderNoticeWithUser
     * @uses MidocoOrderNoticeWithUser::setMidocoUser()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUser $midocoUser
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoUser $midocoUser = null)
    {
        $this
            ->setMidocoUser($midocoUser);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUser|null
     */
    public function getMidocoUser(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoUser
    {
        return $this->MidocoUser;
    }
    /**
     * Set MidocoUser value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUser $midocoUser
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOrderNoticeWithUser
     */
    public function setMidocoUser(?\Pggns\MidocoApi\Orderlists\StructType\MidocoUser $midocoUser = null): self
    {
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
}
