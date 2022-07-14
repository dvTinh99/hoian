<?php
//@package JBZoo\Utils
function Arr_first(array $array)
{
    return \reset($array);
}

function Arr_getField(array $arrayList, string $fieldName = 'id'): array
{
    $result = [];

    foreach ($arrayList as $option) {
        if (\is_array($option)) {
            $result[] = $option[$fieldName];
        } elseif (\is_object($option)) {
            if (isset($option->{$fieldName})) {
                $result[] = $option->{$fieldName};
            }
        }
    }

    return $result;
}