<?php

namespace interfaces;

interface Aggregate
{
    /**
     * 順番にスキャンするIteratorを生成する
     *
     * @return Iterator
     */
    public function iterator();

    /**
     * 逆順にスキャンするIteratorを生成する
     *
     * @return Iterator
     */
    public function reverseIterator();
}