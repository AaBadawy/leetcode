class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $total = count($nums);
        
        $end_pointer = $total -1;
        
        $start_pointer = 0;
        
        $result = $nums;
        
        $rotates = $k;
        
        if($k > $total)
            $rotates = $k % $total;
        
        while($rotates > 0) {
            $nums[$rotates - 1] = $result[$end_pointer];
            
            $end_pointer -- ;
            
            $rotates--;
        }
        
        for($i = $k % $total; $i < $total; $i ++){
            
            $nums[$i] = $result[$start_pointer];
            
            $start_pointer ++;
        }
        return null;
    }
}