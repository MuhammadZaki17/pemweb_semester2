<?php
    function kelulusan($total_nilai){
        if($total_nilai> 55){
            return 'LULUS';
        }
        elseif($total_nilai < 56){
            return 'TIDAK LULUS';
        }
        else
        {
            return 'TIDAK VALID';
        }
    }

    function grade($total_nilai){
        if ($total_nilai <= 35) {
            return 'E';
        } elseif($total_nilai <= 55) {
            return 'D';
        } elseif($total_nilai <= 69) {
            return 'C';
        } elseif($total_nilai <= 84) {
            return 'B';
        } elseif($total_nilai <= 100) {
            return 'A';
        }
        else{
            return 'TIDAK VALID';}
    }

    
?>