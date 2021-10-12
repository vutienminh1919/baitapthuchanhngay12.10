<?php

class CountApp
{
    private string $name;
    public static int $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function toString():string
    {
        return "app name ". $this->name;
}
}
echo "total obj ". CountApp::$count."<br>";
$app1 = new CountApp(1);
echo "total obj ". CountApp::$count."<br>";
$app2 = new CountApp(2);
echo "total obj ". CountApp::$count."<br>";
$app3 = new CountApp(3);
echo "total obj ". CountApp::$count;
$app4 = new CountApp(4);
