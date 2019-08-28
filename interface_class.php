<?php
interface Animal {
    public function call();
    public function run();
}

class HasName {
    protected $name = 'name';

    public function getName() {
        return $this->name;
    }
}

class Cat extends HasName implements Animal {
    protected $name = 'cat';

    public function call() {
        echo $this->getName() . ': 喵喵叫～' . PHP_EOL;
    }

    public function run() {
        echo $this->getName() . '在跑～' . PHP_EOL;
    }
}

class Dog  extends HasName implements Animal {
    protected $name = 'dog';

    public function call() {
        echo $this->getName() . ': 汪汪叫～' . PHP_EOL;
    }

    public function run() {
        echo $this->getName() . '在跑～' . PHP_EOL;
    }
}