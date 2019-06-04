<?php

namespace FondOfSpryker\Zed\CompanyExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CompanyTransfer;

interface CompanyHydrationPluginInterface
{
    /**
     * Specification:
     * - Hydrates a company fields
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer
     */
    public function hydrate(CompanyTransfer $companyTransfer): CompanyTransfer;
}
