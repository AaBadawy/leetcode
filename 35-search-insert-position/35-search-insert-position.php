class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $count = count($nums);
        
        $start = 0 ;
        
        $end = $count - 1;
        
        while($start <= $end) {
            
            $neddle = (int) floor(($start + $end) / 2);
            
            $currentNumber = $nums[$neddle];
            
            if($currentNumber == $target)
                return $neddle;
            
            elseif($nums[$neddle] > $target){
                $end = $neddle - 1;
            }
            else
                $start = $neddle + 1;
                
        }
        
        return $start;
    }
}