<?php

namespace Mugo\ImageFilterTutorialBundle\Imagine\Filter\Basic;
use Imagine\Image\Point;

class TopLeft extends AbstractGravity
{

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return 0;
    }
}