<?php

interface Observer
{
    public function update($data);
}

class ConcreteObserver implements Observer
{
    public function update($data)
    {
        echo "Received Data : " . $data;
    }
}

class Subject
{
    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify($data)
    {
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }
}

$subject = new Subject();

$subject->attach(new ConcreteObserver());
$subject->notify('Hello World');
$subject->detach(new ConcreteObserver());
$subject->notify('Detached Observer');
