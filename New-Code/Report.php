<?php



class Report
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getTitle()
    {
        return  $this->name;
    }

    public function getDate()
    {
        return  $this->age;
    }

    public function getContent()
    {
        return [
            'title' => $this->getTitle(),
            'age' => $this->getDate()
        ];
    }
}
