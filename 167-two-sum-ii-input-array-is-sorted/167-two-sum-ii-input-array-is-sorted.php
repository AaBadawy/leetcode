class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $total = count($numbers);
        
        $start_pointer = 0;
        
        $end_pointer = $total - 1;
        
        while($start_pointer < $end_pointer){
            $value = $numbers[$start_pointer] + $numbers[$end_pointer];
            if($value == $target){
                return [ $start_pointer + 1, $end_pointer + 1];
            }
            
            else if ($value > $target)
                $end_pointer --;
            else
                $start_pointer ++;
        }
        
        return [0,0];
    }
}