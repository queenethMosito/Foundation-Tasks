<?php
function addAll($Array) {
    $sum = 0;
    //loop through array
    $sumDisplay = '' ;
    foreach($Array as $keyArray => $valueArray)
    {
        $totalPerCount = 0;
        foreach ($Array as $values)
        {
            //add sum per array index loop
           $sum += $values;
           $totalPerCount += $values;
        }
        
        $sumDisplay .= $totalPerCount . ' + ' ;
        //remove index
        unset($Array[$keyArray]);
    }
    $sumDisplay = trim($sumDisplay, ' +');

    return $sum . ' => ' . $sumDisplay;
    
    
}

$Array = [1,1,1,1,1]; //5+4+3+2+1=15
echo addAll($Array);
?>