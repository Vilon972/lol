<?php
class Color
    {
        public $red;
        public $green;
        public $blue;
        static $verbose = false;


        static function doc()
        {
          return (file_get_contents('Color.doc.txt'));
        }

        public function __construct($kwarg)
        {
            if (isset($kwarg['red']) && isset($kwarg['green']) && isset($kwarg['blue'])) {
                $this->red = intval($kwarg['red']);
                $this->green = intval($kwarg['green']);
                $this->blue = intval($kwarg['blue']);
            else if (isset($kwarg['rgb']) {
              $hex = str_replace("#", "", $hex);
              if(strlen($hex) == 3) {
                $r = hexdec(substr($hex,0,1).substr($hex,0,1));
                $g = hexdec(substr($hex,1,1).substr($hex,1,1));
                $b = hexdec(substr($hex,2,1).substr($hex,2,1));
              } else {
                $r = hexdec(substr($hex,0,2));
                $g = hexdec(substr($hex,2,2));
                $b = hexdec(substr($hex,4,2));
              }
              $rgb = array($r, $g, $b);
              return $rgb;
            }

            }
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        }
        function __destruct()
        {
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
        }
        public function add($Color)
        {
            return (new Color(array('red' => $this->red + $Color->red, 'green' => $this->green + $Color->green, 'blue' => $this->blue + $Color->blue)));
        }
        public function sub($Color)
        {
            return (new Color(array('red' => $this->red - $Color->red, 'green' => $this->green - $Color->green, 'blue' => $this->blue - $Color->blue)));
        }
        public function mult($mult)
        {
            return (new Color(array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult)));
        }
        function __toString()
        {
            return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
        }

  ?>
