<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 11.11.2017
 * Time: 11:59
 */

class Computer
{
    const IS_DESKTOP = true;
    protected $cpu;
    protected $ram;
    protected $video;
    protected $memory;
    private $stamement = false;
    private $isWorking;
    protected $computerName = 'Computer';

    public function __construct()
    {
        $this->memory = 5;
        $this->ram = 1;
        $this->cpu = 145;
        $this->video = 1;

    }
    public function identifyUser(){
        echo $this->getComputerName().'identify by login and password';

    }

    /**
     * @return string
     */
    public function getComputerName(): string
    {
        return $this->computerName;
    }

    /**
     * @param string $computerName
     */
    public function setComputerName(string $computerName)
    {
        $this->computerName = $computerName;
    }

    public function start()
    {
        echo 'Welcome';
        $this->statement = true;
    }

    public function shutdown()
    {
        echo 'Good Bye';
        $this->stamement = false;
    }

    public function restart()
    {
        if ($this->stamement) {
            $this->shutdown();
            $i = 0;
            while ($i < 5) {
                echo sleep(1) . '.';
                $i++;
            }
            $this->start();
        }
        echo 'Computer is off';
    }
    public function printParameters(){
        try {
        if ($this->stamement) {
            echo $this->cpu;
            echo $this->ram;
            echo $this->memory;
        } else {
            throw new Exception('Computer is shutdown');
        }
        } catch (Exception $e){
            $e->getMessage();
        }
    }
}






