<?php

namespace IteratorLearn;

/**
 * Description of IteratorGetDataExternal
 *
 * @author sk
 */

class DataProvider
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getPartOfData($size)
    {
        return array_splice($this->data, 0, $size);
    }

    public function getCountOfData()
    {
        return count($this->data);
    }
}

class BatchIterator implements \Iterator
{

    const BATCH_SIZE = 10;

    protected $data;
    protected $current;
    protected $allDataCount;
    protected $dataProvider;

    public function __construct(DataProvider $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    public function rewind()
    {
        $this->allDataCount = $this->dataProvider->getCountOfData();
        $this->data = $this->dataProvider->getPartOfData(self::BATCH_SIZE);
        $this->current = 0;
    }

    public function next()
    {
        $this->current++;
        if ($this->current % self::BATCH_SIZE === 0) {
            $this->nextBatch();
        }
    }

    public function key()
    {
        return $this->current;
    }

    public function valid()
    {
        return isset($this->data[$this->current]);
    }

    public function current()
    {
        return $this->data[$this->current];
    }

    private function nextBatch()
    {
        $this->data = $this->dataProvider->getPartOfData(self::BATCH_SIZE);
        $this->current = 0;
    }
}

$period = new \DatePeriod(
    new \DateTime('2017-10-01'), new \DateInterval('P1D'), new \DateTime('2017-11-05')
);

foreach ($period as $date) {
    $dates[] = $date;
}

$dataProvider = new DataProvider($dates);

$it = new BatchIterator($dataProvider);

/** @var \DateTime $data */
foreach ($it as $d) {
    var_dump($d->format('Y-m-d'));
}






