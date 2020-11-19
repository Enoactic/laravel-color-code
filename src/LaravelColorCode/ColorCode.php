<?php

namespace LaravelColorCode;

class ColorCode
{
    private $colorIndex = 0;
    private $colorCodes = [
        '#FFBA00',
        '#F56F02',
        '#CB1F47',
        '#645DAC',
        '#0088D2',
        '#00B345',
        '#008080',
        '#000080',
        '#FFFF00',
        '#808000',
        '#00FF00',
        '#C0C0C0',
        '#800080',
        '#000000',
        '#808080',
        '#FFFFFF',
        '#800000',
        '#0000FF',
        '#FF00FF',
        '#00FFFF',
        '#FF0000',
        '#008000',
    ];

    public function getColor($index = null)
    {
        if($index != null){
            $index = $index % count($this->colorCodes);
            return $this->colorCodes[$index];
        }else{
            $returnColor = $this->colorCodes[$this->colorIndex];
            $this->colorIndex = $this->colorIndex + 1;
            if($this->colorIndex >= count($this->colorCodes)){
                $this->colorIndex = 0;
            }
            return $returnColor;
        }
    }
}
