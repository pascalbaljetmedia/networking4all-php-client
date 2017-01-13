<?php

namespace Pbmedia\Networking4all;

class ResponseRelationGetContact
{

    /**
     * @var ResponseRelationGet[] $item
     */
    protected $item = null;

    /**
     * @param ResponseRelationGet[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return ResponseRelationGet[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param ResponseRelationGet[] $item
     * @return \Pbmedia\Networking4all\ResponseRelationGetContact
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
