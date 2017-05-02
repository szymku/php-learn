<?php
namespace IteratorLearn;

class CounterIterator implements \Iterator
{

    protected $start;
    protected $stop;
    protected $current;

    /**
     * MyIterator constructor.
     * @param $start
     * @param $stop
     */
    public function __construct($start, $stop)
    {
        $this->start = $start;
        $this->stop = $stop;
    }

    public static function start($start, $end)
    {
        return new static($start, $end);
    }

    public function current()
    {
        return $this->current;
    }

    public function key()
    {
        return $this->current;
    }

    public function valid()
    {
        return $this->current < $this->stop;
    }

    public function rewind()
    {
        $this->current = $this->start;
    }

    public function next()
    {
        $this->current++;
    }
}

$counter = CounterIterator::start(2, 40);

foreach ($counter as $number) {
    var_dump($number);
}