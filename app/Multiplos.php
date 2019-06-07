<?php
namespace bhut;

class Multiplos
{

    public function multiploV1($v1,$total) // Multiplo de 3
    {
        for($i=0;$i<=$total;$i+=$v1){
            $results[$i] = "BHUT - {Multiplo de $v1}";
        }
        return $results;
    }

    public function multiploV2($v2,$total) // Multiplo de 5
    {
        for($i=0;$i<=$total;$i+=$v2){
            $results[$i] = "IT - {Multiplo de $v2}";       
        }
        return $results;
    }

    public function multiploV1V2($v1,$v2,$total) // Multiplo de 3 e 5
    {
        for($i=0;$i<=$total;$i+=$v1){  
            for($i_v1_v2=0;$i_v1_v2<=$total;$i_v1_v2+=$v2){
                if($i==$i_v1_v2){
                    $results[$i] = "BHUT IT - {Multiplo de $v1 e $v2}";
                }        
            }
        }
        return $results;
    }
}
