<?php

namespace App\Helpers;

use Illuminate\Support\Str;

trait EnumHelper
{
    /**
     * Generate list with value and label of enum.
     */
    public static function options(): array
    {
        $cases = static::cases();
        $options = [];
        foreach ($cases as $case) {
            $options[] = [
                'value' => $case->value,
                'label' => $case->label(),
            ];
        }

        return $options;
    }

    /**
     * Generate a list with value of enum.
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Translate label.
     */
    public function label(): string
    {
        return Str::title(Str::replace('_', ' ', $this->name));
    }
}
