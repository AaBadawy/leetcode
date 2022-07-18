class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        
        $count = count($nums);
        
        $begin = 0;
        
        $end = $count - 1;
        
        $index = $count - 1;
        
        $temp = 0;
        
        $result = array_fill($begin,$count,null);
        
        while($begin <= $end) {
            
            $first_number = pow($nums[$begin],2);
            
            $second_number = pow($nums[$end],2);
            
            if($first_number > $second_number) {
                $result[$index--] = $first_number;
                $begin ++ ;
            }else {
                $result[$index--] = $second_number;
                $end --;
            } 
        }
        
        return $result;
    }
}