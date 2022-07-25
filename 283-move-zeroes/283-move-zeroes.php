class Solution {

    function swap(&$nums,$p1,$p2) {
        $temp = $nums[$p1];
        
        $nums[$p1] = $nums[$p2];
        
        $nums[$p2] = $temp;
    }
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        
        $total = count($nums);
        
        $start_pointer = 0;
        
        $end_pointer = $total - 1;
        
        for($i = 0; $i < $total ; $i ++){
            if($nums[$i] == 0){
                $nums[$end_pointer + 1] = 0;
                
                $end_pointer++;
                
                unset($nums[$i]);
            }
        }
        
        return NULL;
        
    }
}