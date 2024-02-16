<?php declare(strict_types=1);

namespace Database\Constants;

/**
 * Class MigrationConstants.
 */
final class MigrationConstants
{
    /**
     * Length of hex colors, e.g. `#A10CB4`.
     *
     * @var int
     */
    public const int HEX_COLOR_STRING_LENGTH = 7;

    /**
     * Length of long strings in database, e.g. Long description.
     *
     * @var int
     */
    public const int LONG_STRING_MAX_LENGTH = 500;

    /**
     * Length of short strings in database, e.g. titles.
     *
     * @var int
     */
    public const int SHORT_STRING_MAX_LENGTH = 50;

    /**
     * Length of super long strings in database, e.g. Tooltip text.
     *
     * @var int
     */
    public const int SUPER_LONG_STRING_MAX_LENGTH = 3000;

    /**
     * Maximum value that can be stored on the database for unsigned integer columns.
     *
     * @var int
     */
    public const int UNSIGNED_INTEGER_MAX_VALUE = 4294967295;

    /**
     * Length of very short strings in database.
     *
     * @var int
     */
    public const int VERY_SHORT_STRING_MAX_LENGTH = 5;
}
