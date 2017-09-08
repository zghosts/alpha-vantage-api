<?php

namespace AlphaVantage\Api;

class Performance extends AbstractApi
{
    /**
     * @return array
     */
    public function sector()
    {
        return $this->get('SECTOR');
    }

    /**
     * @return array
     *
     * @deprecated
     */
    public function section()
    {
        return $this->sector();
    }
}
