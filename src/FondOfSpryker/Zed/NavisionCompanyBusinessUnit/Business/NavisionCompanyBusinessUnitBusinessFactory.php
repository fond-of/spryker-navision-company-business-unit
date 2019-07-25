<?php

namespace FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Business;

use FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Business\Reader\CompanyBusinessUnitReader;
use FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Business\Reader\CompanyBusinessUnitReaderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\NavisionCompanyBusinessUnitConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Persistence\NavisionCompanyBusinessUnitRepositoryInterface getRepository()
 */
class NavisionCompanyBusinessUnitBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Business\Reader\CompanyBusinessUnitReaderInterface
     */
    public function createCompanyBusinessUnitReader(): CompanyBusinessUnitReaderInterface
    {
        return new CompanyBusinessUnitReader($this->getRepository());
    }
}
