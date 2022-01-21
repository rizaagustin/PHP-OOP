<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        // menghapus properties sampel apabila di __clone
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",",$arguments);
        echo "Invoke Students with arguments $join" . PHP_EOL;
    }
}