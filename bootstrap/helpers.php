<?php

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;


if (! function_exists('__')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string|array|null
     */
    function __($key = null, $replace = [], $locale = null)
    {
        // Default behavior
        if (is_null($key)) return $key;
        if (trans()->has($key)) return trans($key, $replace, $locale);

        // Search in .json file
        $search = Arr::get(trans()->get('*'), $key);
        if ($search !== null) return trans_replacements($search, $replace);

        // Return .json fallback
        $fallback = Arr::get(trans()->get('*', [], config('app.fallback_locale')), $key);
        if ($fallback !== null) return trans_replacements($fallback, $replace);

        // Return key name if not found
        else return $key;
    }
}


if (! function_exists('trans_choice')) {
    /**
     * Translates the given message based on a count.
     *
     * @param  string  $key
     * @param  \Countable|int|array  $number
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string
     */

    function trans_choice($key, $number, array $replace = [], $locale = null)
    {
        // Get message
        $message = __($key, $replace, $locale);

        // If the given "number" is actually an array or countable we will simply count the
        // number of elements in an instance.
        if (is_array($number) || $number instanceof Countable)
            $number = count($number);

        $replace['count'] = $number;

        return trans_replacements(
            trans()->getSelector()->choose($message, $number, $locale = App::getLocale()),
            $replace
        );
    }
}


if (! function_exists('trans_replacements')) {
    /**
     * Make the place-holder replacements on a line.
     *
     * @param  string  $line
     * @param  array  $replace
     * @return string
     */

    function trans_replacements($line, array $replace)
    {
        if (empty($replace)) return $line;

        $shouldReplace = [];

        foreach ($replace as $key => $value) {
            $shouldReplace[':'.Str::ucfirst($key)] = Str::ucfirst($value);
            $shouldReplace[':'.Str::upper($key)] = Str::upper($value);
            $shouldReplace[':'.$key] = $value;
        }

        return strtr($line, $shouldReplace);
    }
}
