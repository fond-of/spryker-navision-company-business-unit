<?php

namespace FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Persistence;

use FondOfSpryker\Zed\NavisionCompanyBusinessUnit\NavisionCompanyBusinessUnitDependencyProvider;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\NavisionCompanyBusinessUnitConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Persistence\NavisionCompanyBusinessUnitRepositoryInterface getRepository()
 */
class NavisionCompanyBusinessUnitPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery
     */
    public function getCompanyBusinessUnitQuery(): SpyCompanyBusinessUnitQuery
    {
        return $this->getProvidedDependency(NavisionCompanyBusinessUnitDependencyProvider::PROPEL_QUERY_COMPANY_BUSINESS_UNIT);
    }
}
