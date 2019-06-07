<?php
namespace bhut;

class Multiplos
{
    public function run($v1,$v2,$total)
    {
        $results = [];

        $results = $this->multiploV1($v1,$total);
        $results = $this->multiploV2($v2,$total,$results=[]);
        $results = $this->multiploV1V2($v1,$v2,$total,$results=[]);
                
        return $results;
    }

    public function multiploV1($v1,$total)
    {
        for($i=0;$i<=$total;$i+=$v1){
            $results[$i] = "BHUT - {Multiplo de $v1}";
        }
        return $results;
    }

    public function multiploV2($v2,$total)
    {
        for($i=0;$i<=$total;$i+=$v2){
            $results[$i] = "IT - {Multiplo de $v2}";       
        }
        return $results;
    }

    public function multiploV1V2($v1,$v2,$total)
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
