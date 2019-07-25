<?php

namespace FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyBusinessUnit\Persistence\NavisionCompanyBusinessUnitPersistenceFactory getFactory()
 */
class NavisionCompanyBusinessUnitRepository extends AbstractRepository implements NavisionCompanyBusinessUnitRepositoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     *
     * @throws
     */
    public function findCompanyBusinessUnitByExternalReference(string $externalReference): ?CompanyBusinessUnitTransfer
    {
        $companyBusinessUnitEntity = $this->getFactory()
            ->getCompanyBusinessUnitQuery()
            ->filterByExternalReference($externalReference)
            ->findOne();

        if (!$companyBusinessUnitEntity) {
            return null;
        }

        return (new CompanyBusinessUnitTransfer())->fromArray(
            $companyBusinessUnitEntity->toArray(),
            true
        );
    }
}
