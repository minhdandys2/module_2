<?php
    class Rectangle {
        public $height;
        public $weidth;

        public function __construct($weidth,$height) {
            $this->weidth = $weidth;
            $this->height = $height;
        }

        public function getAre() {
            return $this->height * $this->weidth;
        }

        public function getPerimiter() {
            return (($this->height + $this->weidth)*2);
        }

        public function display() {
            return "Rectangle {"."weidth".$this->weidth. ", height" .$this->height."}";
        }

    }
    $weidth = 20 ;
    $height = 30;
    $rectangle = new Rectangle($weidth,$height);
    echo "weidth: ".$rectangle->weidth."<br>";
    echo "height: ".$rectangle->height."<br>";
    echo "perimiter: ".$rectangle->getPerimiter()."<br>";
    echo "area: ".$rectangle->getAre()."<br><hr>";
    $rectangle->weidth = 20;
    $rectangle->height = 30;
    echo "weidth: ".$rectangle->weidth."<br>";
    echo "height: ".$rectangle->height."<br>";
    echo "perimiter: ".$rectangle->getPerimiter()."<br>";
    echo  "area: ".$rectangle->getAre()."<br>";
    echo ("your rectangle".$rectangle->display());
