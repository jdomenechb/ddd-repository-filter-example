<?php

declare(strict_types=1);

namespace RepositoryFilterExample\Domain\ValueObject;

use Spatie\Enum\Enum;

/**
 * @method static self FIRST()
 * @method static self SECOND()
 * @method static self THIRD()
 */
class SchoolClass extends Enum
{
}
