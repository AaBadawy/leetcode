class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        
        $count = count($nums);
        
        $low    = 0; // First index.
        
        $high   = $count - 1; // Last index.

        while ($low <= $high) {

            $middle = (int) floor(($low + $high) / 2);

            if ($nums[$middle] == $target) {
                return $middle;   
            } elseif ($nums[$middle] > $target) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }
        }

        return -1;
    }
}