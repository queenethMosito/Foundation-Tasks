<?php
/*function addAll($Array) {
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
    
    
}*/
function addAll($totalCount)
{
    
    if ($totalCount <= 0)
        return 0;
    else
       return (addAll($totalCount - 1) + $totalCount);
}

// Driver code
$Array  = array(1,1,1,1,1);
$totalCount= sizeof($Array);
echo "Result => ".addAll($totalCount);

?>