<?php
    class Tamagotchi
    {
        private $name;
        private $sleep;
        private $eat;
        private $play;

        function __construct($name, $sleep, $eat, $play)
        {
            $this->name = $name;
            $this->sleep = $sleep;
            $this->eat = $eat;
            $this->play = $play;
        }

        function getName()
        {
            return $this->name;
        }

        function getSleep()
        {
            return $this->sleep;
        }

        function initialEat()
        {
          return $this->eat;
        }

        function getEat()
        {
          //  function eatTimer()
          // {
            while ($this->eat > 0) {
                sleep(2);
                $this->eat = $this->eat - 1;

                if ($this->eat == 0) {
                    echo "You didn't feed your pet in time, and it died of hunger:";
                }
            }
          // }
            return $this->eat;
        }

        function save()
        {
            $_SESSION['player'];
        }

        function getPlay()
        {
            return $this->play;
        }

        function sleepTimer()
        {
          $sleep = rand(1, 5);

          while ($sleep >= 0) {
              sleep(2);
              $sleep = $sleep - 1;

              if ($sleep == 0) {
                  echo "Your pet was too tired, and passed away.";
              }
          }
        }

        // static function eatTimer()
        // {
        //
        //   while ($this->eat >= 0) {
        //       sleep(2);
        //       $this->eat = $this->eat - 1;
        //
        //       if ($this->eat == 0) {
        //           echo "You didn't feed your pet in time, and it died of hunger.";
        //       }
        //   }
        // }

        function playTimer()
        {
          $play = rand(1, 10);

          while ($play >= 0) {
              sleep(2);
              $play = $play - 1;

              if ($play == 0) {
                  echo "You didn't play with your pet enough, and it ran away.";
              }
          }
        }
    }
?>
