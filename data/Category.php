<?php

class Category
{

    private string $name;
    private bool $expensive;

    public Function getName(): string
    {
        return $this->name;
    }

    public Function setName(string $name):void
    {
        if (trim($name) != "") { // untuk validasi apabila data kosong tidak di set
            $this->name = $name;
        }

    }

    public Function isExpensive(): bool
    {
        return $this->expensive;
    }

    public Function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

}