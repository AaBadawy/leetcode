/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $start_pointer = $head;
        
        $end_pointer = null;
        
        $list_nodes = [];
        
        $list_nodes[] = $head;
        
        $head = $head->next;
        
        while($head != null){
            
            $list_nodes[] = $head;
            
            $head = $head->next;
        }
        
        $total = count($list_nodes);
        
        return $list_nodes[(int) $total / 2];
        
    }
}