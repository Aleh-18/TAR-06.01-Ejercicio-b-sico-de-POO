<?php   
    class Operar {
       
        public function sumar($n1, $n2){

            return $n1+$n2;
            
        }

        public function restar($n1, $n2){
            if($this->Comparar($n1,$n2)){

                return $n1-$n2;

            }else{

                return $n2-$n1;

            }
        }

        public function multiplicar($n1,$n2){
            return $n1*$n2;
        }

        public function dividir($n1,$n2){
            if($this->Comparar($n1,$n2)){

                return $n1/$n2;

            }else{

                return $n2/$n1;

            }
        }
        
        private function Comparar($n1,$n2){
        
            if($n1>$n2){

                return $r=true;
        
            }else{

                return $r=false;
            }
        }
    }

?>
    
 