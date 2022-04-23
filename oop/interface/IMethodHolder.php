<?php

interface IMethodHolder
{
    public function getInfo($info);
    public function setInfo($info);
    public function calculate($first, $second);
}