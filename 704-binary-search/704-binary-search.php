class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $start = 0;
    
        $length = count($nums);
        
        $end = (int) ceil($length / 2);
        
        for($i = $start; $i < $end; $i ++) {
            if($nums[$i] == $target)
                return $i;
            elseif($target > $nums[$end - 1]){
                $start = $end -1;
                $i = $end -1;
                $end = $length;
            }
        }
        return -1;
    }
}