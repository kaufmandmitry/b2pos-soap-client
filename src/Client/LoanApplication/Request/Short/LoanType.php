<?php

declare(strict_types=1);

namespace Vanta\Integration\B2posSoapClient\Client\LoanApplication\Request\Short;

enum LoanType: int
{
    case LOAN = 0;

    case INSTALLMENT = 1;
}
