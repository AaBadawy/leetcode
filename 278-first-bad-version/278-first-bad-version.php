/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        
        $start = 1;
        
        $end = $n;
        
        while($start <= $end){
            
            $currentV = (int) (($start + $end) / 2);
            
            if($this->isBadVersion($currentV)) {
                $end = $currentV - 1;
            }
            else{
                $start = $currentV + 1;
            }
            
        }
        
        return $start;
    }
}