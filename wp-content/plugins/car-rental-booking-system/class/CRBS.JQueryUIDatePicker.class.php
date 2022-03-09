<?php

/******************************************************************************/
/******************************************************************************/

class CRBSJQueryUIDatePicker
{
	/**************************************************************************/
	
    static function convertDateFormat($formatPHP)
    {
        $symbol=array
        (
            'd'                                                                 =>  'dd',
            'D'                                                                 =>  'D',
            'j'                                                                 =>  'd',
            'l'                                                                 =>  'DD',
            'N'                                                                 =>  '',
            'S'                                                                 =>  '',
            'w'                                                                 =>  '',
            'z'                                                                 =>  'o',
            'W'                                                                 =>  '',
            'F'                                                                 =>  'MM',
            'm'                                                                 =>  'mm',
            'M'                                                                 =>  'M',
            'n'                                                                 =>  'm',
            't'                                                                 =>  '',
            'L'                                                                 =>  '',
            'o'                                                                 =>  '',
            'Y'                                                                 =>  'yy',
            'y'                                                                 =>  'y',
            'a'                                                                 =>  '',
            'A'                                                                 =>  '',
            'B'                                                                 =>  '',
            'g'                                                                 =>  '',
            'G'                                                                 =>  '',
            'h'                                                                 =>  '',
            'H'                                                                 =>  '',
            'i'                                                                 =>  '',
            's'                                                                 =>  '',
            'u'                                                                 =>  ''            
        );

        $formatJS=null;
        $escaping=false;
        
        for($i=0;$i<strlen($formatPHP);$i++)
        {
            $char=$formatPHP[$i];
            if($char==='\\')
            {
                $i++;
                $formatJS.=$escaping ? $formatPHP[$i] : '\''.$formatPHP[$i];
                $escaping=true;
            }
            else
            {
                if($escaping)
                {
                    $formatJS.="'"; 
                    $escaping=false; 
                }
                $formatJS.=isset($symbol[$char]) ? $symbol[$char] : $char;
            }
        }
        
        return($formatJS);
    }
	
    /**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/