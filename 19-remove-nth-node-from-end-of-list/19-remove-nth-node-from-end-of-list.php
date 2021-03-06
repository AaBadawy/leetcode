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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        
        $nodes = [];
    
        while($head) {
            $nodes[] = $head;
            
            $head = $head->next;
        }
        
        $count = count($nodes);
        
        if($n == $count){
            $count === 1 ? $nodes[0] = null : $nodes[0] = $nodes[1];
        }
        else{
            
            $linked_node = $nodes[$count - $n - 1];

            $linked_node->next = $nodes[$count - $n + 1];
        }

        return $nodes[0];
        
    }
}