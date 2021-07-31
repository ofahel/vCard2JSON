<?php
    /*
    Repo name: PHP vCard 2 JSON
    Repo link: https://github.com/ofahel/php-vcard2json
    Coded by: oFahel
    */

  
    class vCard2JSON{
        public $vCard;
        function __construct($vCard = null){
            if($vCard != null)
                $this->vCard = $vCard;
        }
        function getJSON($vCard = null){
            //If $vCard isn't setted, use $this-vCard
            if($vCard == null)
                $vCard = $this->vCard;
            
            //Temporary store vCard datas
            $array = [];
            //Explode and parse vCard line by line
            foreach(explode("\r\n", $vCard) as $line){
                //Check this line has a prefix and explode
                if(str_contains($line, ':')){
                    $line = explode(':', $line);
                    
                    //Sanitizers
                    if(str_contains($line[0], 'TEL;')) $line[0] = 'TEL';
                    if(str_contains($line[0], 'BEGIN') || 
                        str_contains($line[0], 'END') ||
                        str_contains($line[0], 'VERSION') ||
                        str_contains($line[0], 'REV')) continue;
                    
                    //Save line to buffer
                    $array[$line[0]] = $line[1];
                }
            }
            //Build and return JSON
            return json_encode($array, true);
        }
    }
