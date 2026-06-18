<?php

namespace App\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use InvalidArgumentException;
class OracleDateType extends Type
{
    const ORACLE_DATE = 'oracle_date';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return "DATE";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof \DateTimeInterface) {
            return $value;
        }

        // Grâce à TO_CHAR ci-dessous, on reçoit toujours ce format,
        // mais on garde des formats de secours par sécurité.
        $formats = [
            'Y-m-d H:i:s',
            'd/m/y',
            'd/m/Y',
            'd-M-y',
        ];

        foreach ($formats as $format) {
            $dateTime = \DateTime::createFromFormat($format, $value);
            if ($dateTime !== false) {
                return $dateTime;
            }
        }

        throw new InvalidArgumentException("Invalid date format: " . $value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof \DateTimeInterface) {
            return $value->format('Y-m-d H:i:s');
        }

        throw new InvalidArgumentException("Invalid date object: " . $value);
    }

    // Force la conversion explicite à l'écriture, indépendamment du NLS_DATE_FORMAT de session
    public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform)
    {
        return "TO_DATE($sqlExpr, 'YYYY-MM-DD HH24:MI:SS')";
    }

    // Force la conversion explicite à la lecture, pour avoir un format prévisible
    public function convertToPHPValueSQL($sqlExpr, $platform)
    {
        return "TO_CHAR($sqlExpr, 'YYYY-MM-DD HH24:MI:SS')";
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }

    public function getName()
    {
        return self::ORACLE_DATE;
    }
}