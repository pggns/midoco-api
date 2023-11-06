<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JarManifest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JarManifest extends AbstractStructBase
{
    /**
     * The Filename
     * Meta information extracted from the WSDL
     * - documentation: The jar file name
     * @var string|null
     */
    protected ?string $Filename = null;
    /**
     * The Path
     * Meta information extracted from the WSDL
     * - documentation: The absolute path of the jar file
     * @var string|null
     */
    protected ?string $Path = null;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - documentation: Where the jar is loaded: JBoss or Tomcat
     * @var string|null
     */
    protected ?string $Domain = null;
    /**
     * The Manifest_Version
     * @var string|null
     */
    protected ?string $Manifest_Version = null;
    /**
     * The Ant_Version
     * @var string|null
     */
    protected ?string $Ant_Version = null;
    /**
     * The Created_By
     * @var string|null
     */
    protected ?string $Created_By = null;
    /**
     * The Built_By
     * @var string|null
     */
    protected ?string $Built_By = null;
    /**
     * The Built_Time
     * @var string|null
     */
    protected ?string $Built_Time = null;
    /**
     * The Implementation_Title
     * @var string|null
     */
    protected ?string $Implementation_Title = null;
    /**
     * The Implementation_Vendor
     * @var string|null
     */
    protected ?string $Implementation_Vendor = null;
    /**
     * The Implementation_Version
     * @var string|null
     */
    protected ?string $Implementation_Version = null;
    /**
     * The Subversion_Revision
     * @var string|null
     */
    protected ?string $Subversion_Revision = null;
    /**
     * The Subversion_Branch
     * @var string|null
     */
    protected ?string $Subversion_Branch = null;
    /**
     * The Subversion_Commit_Revision
     * @var string|null
     */
    protected ?string $Subversion_Commit_Revision = null;
    /**
     * The Subversion_Commit_Date
     * @var string|null
     */
    protected ?string $Subversion_Commit_Date = null;
    /**
     * Constructor method for JarManifest
     * @uses JarManifest::setFilename()
     * @uses JarManifest::setPath()
     * @uses JarManifest::setDomain()
     * @uses JarManifest::setManifest_Version()
     * @uses JarManifest::setAnt_Version()
     * @uses JarManifest::setCreated_By()
     * @uses JarManifest::setBuilt_By()
     * @uses JarManifest::setBuilt_Time()
     * @uses JarManifest::setImplementation_Title()
     * @uses JarManifest::setImplementation_Vendor()
     * @uses JarManifest::setImplementation_Version()
     * @uses JarManifest::setSubversion_Revision()
     * @uses JarManifest::setSubversion_Branch()
     * @uses JarManifest::setSubversion_Commit_Revision()
     * @uses JarManifest::setSubversion_Commit_Date()
     * @param string $filename
     * @param string $path
     * @param string $domain
     * @param string $manifest_Version
     * @param string $ant_Version
     * @param string $created_By
     * @param string $built_By
     * @param string $built_Time
     * @param string $implementation_Title
     * @param string $implementation_Vendor
     * @param string $implementation_Version
     * @param string $subversion_Revision
     * @param string $subversion_Branch
     * @param string $subversion_Commit_Revision
     * @param string $subversion_Commit_Date
     */
    public function __construct(?string $filename = null, ?string $path = null, ?string $domain = null, ?string $manifest_Version = null, ?string $ant_Version = null, ?string $created_By = null, ?string $built_By = null, ?string $built_Time = null, ?string $implementation_Title = null, ?string $implementation_Vendor = null, ?string $implementation_Version = null, ?string $subversion_Revision = null, ?string $subversion_Branch = null, ?string $subversion_Commit_Revision = null, ?string $subversion_Commit_Date = null)
    {
        $this
            ->setFilename($filename)
            ->setPath($path)
            ->setDomain($domain)
            ->setManifest_Version($manifest_Version)
            ->setAnt_Version($ant_Version)
            ->setCreated_By($created_By)
            ->setBuilt_By($built_By)
            ->setBuilt_Time($built_Time)
            ->setImplementation_Title($implementation_Title)
            ->setImplementation_Vendor($implementation_Vendor)
            ->setImplementation_Version($implementation_Version)
            ->setSubversion_Revision($subversion_Revision)
            ->setSubversion_Branch($subversion_Branch)
            ->setSubversion_Commit_Revision($subversion_Commit_Revision)
            ->setSubversion_Commit_Date($subversion_Commit_Date);
    }
    /**
     * Get Filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->Filename;
    }
    /**
     * Set Filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->Filename = $filename;
        
        return $this;
    }
    /**
     * Get Path value
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->Path;
    }
    /**
     * Set Path value
     * @param string $path
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setPath(?string $path = null): self
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        $this->Path = $path;
        
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;
        
        return $this;
    }
    /**
     * Get Manifest_Version value
     * @return string|null
     */
    public function getManifest_Version(): ?string
    {
        return $this->{'Manifest-Version'};
    }
    /**
     * Set Manifest_Version value
     * @param string $manifest_Version
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setManifest_Version(?string $manifest_Version = null): self
    {
        // validation for constraint: string
        if (!is_null($manifest_Version) && !is_string($manifest_Version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_Version, true), gettype($manifest_Version)), __LINE__);
        }
        $this->Manifest_Version = $this->{'Manifest-Version'} = $manifest_Version;
        
        return $this;
    }
    /**
     * Get Ant_Version value
     * @return string|null
     */
    public function getAnt_Version(): ?string
    {
        return $this->{'Ant-Version'};
    }
    /**
     * Set Ant_Version value
     * @param string $ant_Version
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setAnt_Version(?string $ant_Version = null): self
    {
        // validation for constraint: string
        if (!is_null($ant_Version) && !is_string($ant_Version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ant_Version, true), gettype($ant_Version)), __LINE__);
        }
        $this->Ant_Version = $this->{'Ant-Version'} = $ant_Version;
        
        return $this;
    }
    /**
     * Get Created_By value
     * @return string|null
     */
    public function getCreated_By(): ?string
    {
        return $this->{'Created-By'};
    }
    /**
     * Set Created_By value
     * @param string $created_By
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setCreated_By(?string $created_By = null): self
    {
        // validation for constraint: string
        if (!is_null($created_By) && !is_string($created_By)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created_By, true), gettype($created_By)), __LINE__);
        }
        $this->Created_By = $this->{'Created-By'} = $created_By;
        
        return $this;
    }
    /**
     * Get Built_By value
     * @return string|null
     */
    public function getBuilt_By(): ?string
    {
        return $this->{'Built-By'};
    }
    /**
     * Set Built_By value
     * @param string $built_By
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setBuilt_By(?string $built_By = null): self
    {
        // validation for constraint: string
        if (!is_null($built_By) && !is_string($built_By)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($built_By, true), gettype($built_By)), __LINE__);
        }
        $this->Built_By = $this->{'Built-By'} = $built_By;
        
        return $this;
    }
    /**
     * Get Built_Time value
     * @return string|null
     */
    public function getBuilt_Time(): ?string
    {
        return $this->{'Built-Time'};
    }
    /**
     * Set Built_Time value
     * @param string $built_Time
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setBuilt_Time(?string $built_Time = null): self
    {
        // validation for constraint: string
        if (!is_null($built_Time) && !is_string($built_Time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($built_Time, true), gettype($built_Time)), __LINE__);
        }
        $this->Built_Time = $this->{'Built-Time'} = $built_Time;
        
        return $this;
    }
    /**
     * Get Implementation_Title value
     * @return string|null
     */
    public function getImplementation_Title(): ?string
    {
        return $this->{'Implementation-Title'};
    }
    /**
     * Set Implementation_Title value
     * @param string $implementation_Title
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setImplementation_Title(?string $implementation_Title = null): self
    {
        // validation for constraint: string
        if (!is_null($implementation_Title) && !is_string($implementation_Title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($implementation_Title, true), gettype($implementation_Title)), __LINE__);
        }
        $this->Implementation_Title = $this->{'Implementation-Title'} = $implementation_Title;
        
        return $this;
    }
    /**
     * Get Implementation_Vendor value
     * @return string|null
     */
    public function getImplementation_Vendor(): ?string
    {
        return $this->{'Implementation-Vendor'};
    }
    /**
     * Set Implementation_Vendor value
     * @param string $implementation_Vendor
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setImplementation_Vendor(?string $implementation_Vendor = null): self
    {
        // validation for constraint: string
        if (!is_null($implementation_Vendor) && !is_string($implementation_Vendor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($implementation_Vendor, true), gettype($implementation_Vendor)), __LINE__);
        }
        $this->Implementation_Vendor = $this->{'Implementation-Vendor'} = $implementation_Vendor;
        
        return $this;
    }
    /**
     * Get Implementation_Version value
     * @return string|null
     */
    public function getImplementation_Version(): ?string
    {
        return $this->{'Implementation-Version'};
    }
    /**
     * Set Implementation_Version value
     * @param string $implementation_Version
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setImplementation_Version(?string $implementation_Version = null): self
    {
        // validation for constraint: string
        if (!is_null($implementation_Version) && !is_string($implementation_Version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($implementation_Version, true), gettype($implementation_Version)), __LINE__);
        }
        $this->Implementation_Version = $this->{'Implementation-Version'} = $implementation_Version;
        
        return $this;
    }
    /**
     * Get Subversion_Revision value
     * @return string|null
     */
    public function getSubversion_Revision(): ?string
    {
        return $this->{'Subversion-Revision'};
    }
    /**
     * Set Subversion_Revision value
     * @param string $subversion_Revision
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setSubversion_Revision(?string $subversion_Revision = null): self
    {
        // validation for constraint: string
        if (!is_null($subversion_Revision) && !is_string($subversion_Revision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subversion_Revision, true), gettype($subversion_Revision)), __LINE__);
        }
        $this->Subversion_Revision = $this->{'Subversion-Revision'} = $subversion_Revision;
        
        return $this;
    }
    /**
     * Get Subversion_Branch value
     * @return string|null
     */
    public function getSubversion_Branch(): ?string
    {
        return $this->{'Subversion-Branch'};
    }
    /**
     * Set Subversion_Branch value
     * @param string $subversion_Branch
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setSubversion_Branch(?string $subversion_Branch = null): self
    {
        // validation for constraint: string
        if (!is_null($subversion_Branch) && !is_string($subversion_Branch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subversion_Branch, true), gettype($subversion_Branch)), __LINE__);
        }
        $this->Subversion_Branch = $this->{'Subversion-Branch'} = $subversion_Branch;
        
        return $this;
    }
    /**
     * Get Subversion_Commit_Revision value
     * @return string|null
     */
    public function getSubversion_Commit_Revision(): ?string
    {
        return $this->{'Subversion-Commit-Revision'};
    }
    /**
     * Set Subversion_Commit_Revision value
     * @param string $subversion_Commit_Revision
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setSubversion_Commit_Revision(?string $subversion_Commit_Revision = null): self
    {
        // validation for constraint: string
        if (!is_null($subversion_Commit_Revision) && !is_string($subversion_Commit_Revision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subversion_Commit_Revision, true), gettype($subversion_Commit_Revision)), __LINE__);
        }
        $this->Subversion_Commit_Revision = $this->{'Subversion-Commit-Revision'} = $subversion_Commit_Revision;
        
        return $this;
    }
    /**
     * Get Subversion_Commit_Date value
     * @return string|null
     */
    public function getSubversion_Commit_Date(): ?string
    {
        return $this->{'Subversion-Commit-Date'};
    }
    /**
     * Set Subversion_Commit_Date value
     * @param string $subversion_Commit_Date
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\JarManifest
     */
    public function setSubversion_Commit_Date(?string $subversion_Commit_Date = null): self
    {
        // validation for constraint: string
        if (!is_null($subversion_Commit_Date) && !is_string($subversion_Commit_Date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subversion_Commit_Date, true), gettype($subversion_Commit_Date)), __LINE__);
        }
        $this->Subversion_Commit_Date = $this->{'Subversion-Commit-Date'} = $subversion_Commit_Date;
        
        return $this;
    }
}
