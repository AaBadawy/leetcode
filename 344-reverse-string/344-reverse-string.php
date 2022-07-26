class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $total = count($s);
        
        $start_pointer = 0;
        
        $end_pointer = $total - 1;
        
        while($start_pointer < $end_pointer){
            $temp = $s[$start_pointer];
            
            $s[$start_pointer] = $s[$end_pointer];
            
            $s[$end_pointer] = $temp;
            
            $start_pointer ++;
            
            $end_pointer --;
            
            
        }
        
        return NULL;
    }
}