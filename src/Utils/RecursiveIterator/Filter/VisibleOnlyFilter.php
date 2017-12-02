<?php

namespace Zemit\Plugins\Utils\RecursiveIterator\Filter;

class VisibleOnlyFilter extends \RecursiveFilterIterator {

    public function accept() {
        $fileName = $this->getInnerIterator()->current()->getFileName();
        $firstChar = $fileName[0];
        return $firstChar !== '.';
    }

}