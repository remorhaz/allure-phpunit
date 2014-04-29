<?php

namespace Yandex\Allure\Adapter\Annotation;

/**
 * @Annotation
 * @Target({"METHOD"})
 * @package Yandex\Allure\Adapter\Annotation
 */
class Step {
    /**
     * @var string
     */
    public $name;
}