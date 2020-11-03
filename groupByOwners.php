<?php
class ItemOwners {
    public static function groupByOwners($items) {
        $owner = array();
        //check if array is empty
        if(count($items)>0)
        {
            foreach($items as $itemKey => $itemValue)
            {
                //sorting array by element
                $owner[$itemValue][] = $itemKey;
            }
        }
        return $owner;
    }
}

$items = array(
    "Baseball Bat" => "John",
    "Golf ball" => "Stan",
    "Tennis Racket" => "John"
);
echo json_encode(ItemOwners::groupByOwners($items));

?>
