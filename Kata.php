<?php

// TASK 1

function loop_size(Node $node): int {
  // Your code here
  $nodes = [];
  $nodes[] = $node;
  $isLoop = false;
  $count = 0;
  while(! $isLoop) {
    $node = $node->getNext();
    $tail = 0;
    foreach($nodes as $checkedNode) {
      if($checkedNode === $node) {
        return count($nodes) - $tail;
      } else {
        $tail++;
      }
    }
    $nodes[] = $node;
  }
}

// TASK 2

function what_list_am_i_on(array $actions): string {
  $n1 = 0;
  $n2 = 0;
  $w1 = "naughty";
  $w2 = "nice";
  $wl1 = ["b", "f", "k"];
  $wl2 = ["g", "s", "n"];
  
  foreach($actions as $item) {
    $character = substr($item, 0, 1);
    $n1 = in_array($character, $wl1) ? ($n1+1) : $n1;
    $n2 = in_array($character, $wl2) ? ($n2+1) : $n2; 
  }
  $comparition = $n1 <=> $n2;
  switch($comparition) {
      case 0:
        return $w1;
        break;
      case -1:
        return $w2;
        break;
      case 1:
        return $w1;
        break;
  } 
}

// TASK 3

function planeSeat($a){
//code here :)
  $number = (int)($a);
  $section = strtoupper(substr($a, strlen($number)));
  $position = "";
  if ((($number < 1) || ($number > 60))||(($section == 'I') || ($section == 'J') || ($section > 'K'))) {
    return "No Seat!!";
  }
  if ($number < 21) {
    $position = "Front";
  } else if ($number < 41) {
    $position = "Middle";
  } else {
    $position = "Back";
  }
  if ($section < 'D') {
    $position .= '-'.'Left';
  } else if  ($section < 'G') {
    $position .= '-'.'Middle';
  } else {
    $position .= '-'.'Right';
  }
                    
  return $position;
}