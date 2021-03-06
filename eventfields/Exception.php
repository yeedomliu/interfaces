<?php

namespace wii\interfaces\eventfields;

trait Exception
{

    /**
     * 字段
     *
     * @var \Exception
     */
    protected $exception = null;

    /**
     * @return \Exception
     */
    public function getException(): \Exception {
        return $this->exception;
    }

    /**
     * @param \Exception $exception
     *
     * @return $this
     */
    public function setException(\Exception $exception) {
        $this->exception = $exception;

        return $this;
    }


}
