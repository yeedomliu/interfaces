<?php

namespace wii\interfaces\requestfields;

trait CacheTime
{

    /**
     * 缓存时间
     *
     * @var int
     */
    protected $cacheTime = 0;

    /**
     * @return int
     */
    public function getCacheTime() {
        return $this->cacheTime;
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function setCacheTime($cacheTime) {
        $this->cacheTime = $cacheTime;

        return $this;
    }

}