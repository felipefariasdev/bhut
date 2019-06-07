<?php
namespace bhut;

class Multiplos
{
    public function run($v1,$v2,$numTot){
        $multiplosRepetidos = [];
        $results = [];
        
        for($i1=0;$i1<=$numTot;$i1=$i1+$v1){
            $results[$i1] = 'BHUT';
            for($i2=0;$i2<=$numTot;$i2=$i2+$v2){
                if($i1==$i2){
                    $multiplosRepetidos[]= [$i1=>'BHUT IT'];
                    $results[$i1] = 'BHUT IT';
                }        
            }
        }
        return [
            'multiplosRepetidos'=>($multiplosRepetidos),
            'qtdMtiplosRepetidos'=>count($multiplosRepetidos),
            'results'=>$results
        ];
    }
}
