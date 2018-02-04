<?php

namespace OpenClosed;


class StringReplacement
{
    /**
     * Replace strings using Filters
     *
     * @param string $string
     * @param Filter[] $filters
     * @return string
     */
    public function modify($string, array $filters)
    {
        foreach ($filters as $search => $replace) {
            $string = str_replace($search, $replace, $string);
        }
        return $string;
    }
}