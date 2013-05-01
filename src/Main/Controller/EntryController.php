<?php
namespace Main\Controller;

use Main\Entity\Entry;

class EntryController
{
    protected $entry;

    public function __construct(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function getEntriesAction()
    {
        return array();
    }
}