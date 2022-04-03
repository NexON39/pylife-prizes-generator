<?php
    class prizegenerator extends dbconnect
    {
        public function codeGenerate() {
            $keys = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','1','2','3','4','5','6','7','8','9','0');
            $rand_keys = array();
            for($i=0; $i<8; $i++) {
                $rand_keys[$i] = $keys[rand(0,35)];
            }
            $code = $rand_keys[0].$rand_keys[1].$rand_keys[2].$rand_keys[3].$rand_keys[4].$rand_keys[5].$rand_keys[6].$rand_keys[7];

            return strval($code);
        }

        public function prizeGenerate() {
            $prizes = array('Kasa 10$', 'Kasa 20$', 'Kasa 50$', 'Kasa 100$','Kasa 500$');
            $prize = $prizes[rand(0,count($prizes)-1)];
            return strval($prize);
        }

        public function checkCodeExist() {
            do {
                $code = $this->codeGenerate();
                $q = "SELECT * FROM prizes WHERE code='$code' AND used=1;";
                $res = $this->connect()->query($q);
            } while($res->num_rows>0);
            return $code;
        }

        public function getPrize() {
            $code = $this->checkCodeExist();
            $prize = $this->prizeGenerate();
            $q = "SELECT * FROM `prizes` WHERE code='$code';";
            if($this->connect()->query($q)->num_rows>0)
                echo "Twój kod nagrody: ".$code;
            else {
                $q = "INSERT INTO prizes VALUES (NULL, '$code', '$prize', 0)";
                $this->connect()->query($q);
                echo "Twój kod nagrody: ".$code;
            }
        }
    }
?>