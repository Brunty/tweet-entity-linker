<?php

namespace Tests\Jedkirby\TweetEntityLinker\Entity\Fixtures;

use Jedkirby\TweetEntityLinker\Entity\AbstractEntity;

class NoRequiredProperties extends AbstractEntity
{
    /**
     * {@inhertDoc}.
     */
    public function getRequiredProperties()
    {
        return [];
    }

    /**
     * {@inhertDoc}.
     */
    public function getSearchText()
    {
        return '';
    }

    /**
     * {@inhertDoc}.
     */
    public function getHtml()
    {
        return '';
    }
}
