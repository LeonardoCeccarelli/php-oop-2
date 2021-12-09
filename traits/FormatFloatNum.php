<?php

trait FormatFloatNum
{
    public function formatFloatNum($_num)
    {
        return number_format((float)$_num, 2, '.', '');
    }
}
