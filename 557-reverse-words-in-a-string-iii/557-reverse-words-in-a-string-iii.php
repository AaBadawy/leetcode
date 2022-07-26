class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $strings = explode(" ",$s);
        
        $start_pointer = 0;
        
        $end_pointer = count($strings) - 1;
        
        while($start_pointer <= $end_pointer){
            
            $strings[$start_pointer] = strrev($strings[$start_pointer]);
            
            if($end_pointer != $start_pointer)
                $strings[$end_pointer] = strrev($strings[$end_pointer]);
            
            $start_pointer ++;
            
            $end_pointer --;
        }
        return implode(" ",$strings);
    }
}