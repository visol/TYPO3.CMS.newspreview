<?php

namespace GeorgRinger\Newspreview\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * @return array
     */
    public function getFalPreviewAndFull()
    {
        return $this->getFalMediaPreviewsByTypes([0, 1]);
    }

    /**
     * @return array
     */
    public function getFalPreviewOnly()
    {
        return $this->getFalMediaPreviewsByTypes([2]);
    }

    /**
     * Find all FAL media items with the given type array
     *
     * @param array $types
     *
     * @return array
     */
    protected function getFalMediaPreviewsByTypes($types)
    {
        $items = [];
        if ($this->getFalMedia()) {
            /** @var $mediaItem \GeorgRinger\News\Domain\Model\FileReference */
            foreach ($this->getFalMedia() as $mediaItem) {
                if (in_array((int)$mediaItem->getOriginalResource()->getProperty('showinpreview'), $types)) {
                    $items[] = $mediaItem;
                }
            }
        }
        return $items;
    }
}
