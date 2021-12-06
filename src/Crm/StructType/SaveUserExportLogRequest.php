<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserExportLogRequest StructType
 * @subpackage Structs
 */
class SaveUserExportLogRequest extends AbstractStructBase
{
    /**
     * The MidocoUserExportLog
     * Meta information extracted from the WSDL
     * - ref: MidocoUserExportLog
     * @var \Pggns\MidocoApi\Crm\StructType\UserExportLogDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UserExportLogDTO $MidocoUserExportLog = null;
    /**
     * Constructor method for SaveUserExportLogRequest
     * @uses SaveUserExportLogRequest::setMidocoUserExportLog()
     * @param \Pggns\MidocoApi\Crm\StructType\UserExportLogDTO $midocoUserExportLog
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UserExportLogDTO $midocoUserExportLog = null)
    {
        $this
            ->setMidocoUserExportLog($midocoUserExportLog);
    }
    /**
     * Get MidocoUserExportLog value
     * @return \Pggns\MidocoApi\Crm\StructType\UserExportLogDTO|null
     */
    public function getMidocoUserExportLog(): ?\Pggns\MidocoApi\Crm\StructType\UserExportLogDTO
    {
        return $this->MidocoUserExportLog;
    }
    /**
     * Set MidocoUserExportLog value
     * @param \Pggns\MidocoApi\Crm\StructType\UserExportLogDTO $midocoUserExportLog
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUserExportLogRequest
     */
    public function setMidocoUserExportLog(?\Pggns\MidocoApi\Crm\StructType\UserExportLogDTO $midocoUserExportLog = null): self
    {
        $this->MidocoUserExportLog = $midocoUserExportLog;
        
        return $this;
    }
}
