<?php

declare(strict_types=1);

namespace PictShare\Classes\Filters;

class EdgeDetectFilter extends AbstractFilter
{
    /**
     * @inheritdoc
     */
    final public function apply(): FilterInterface
    {
        imagefilter($this->image, IMG_FILTER_EDGEDETECT);

        return $this;
    }

    /**
     * @inheritdoc
     */
    final public function getDefaults(): array
    {
        return [];
    }
}
