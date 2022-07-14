class Solution {
    
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        
        $count = count($nums);
        
        $start = 0;
        
        $end = $count - 1;
        
        while($start <= $end) {
            $mid = (int) floor(($start + $end) / 2) ;
            
            if($nums[$mid] == $target)
                return $mid;
            elseif($nums[$mid] > $target)
                $end = $mid - 1;
            else
                $start = $mid +1;
        }
    
        return -1;
    }
}