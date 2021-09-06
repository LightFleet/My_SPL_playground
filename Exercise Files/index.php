<?php

$products = [
  'new' => ['test' => 'test'],
  'last' => 'Not Test',
  'who' => [
      'me' => 'no',
      'you' => 'who',
      'no' => 'yes',
      'maybe' => [
          'i' => 'maybe',
          'you' => 'you'
      ]
  ]
];

$products = new RecursiveArrayIterator($products);
$products = new RecursiveIteratorIterator($products, RecursiveIteratorIterator::SELF_FIRST);

foreach ($products as $key => $item){

    $level = $products->getDepth() + 2;

    if ($products->callHasChildren()){
        echo "<h$level>$key</h$level>";
    } else {
        echo $item . '<br>';
    }
}

/************************************************************/

class RecursiveTableBuilder extends RecursiveIteratorIterator
{
    public function beginIteration()
    {
        echo '<tbody>\n';
    }

    public function endIteration()
    {
        echo '</tbody>\n';
    }

    public function beginChildren()
    {
        echo '<tr>\n';
    }

    public function endChildren()
    {
        echo '</tr></td>\n';
    }
}

$products = [
    'new' => ['test' => 'test'],
    'last' => 'Not Test',
    'who' => [
        'me' => 'no',
        'you' => 'who',
        'no' => 'yes',
        'maybe' => [
            'i' => 'maybe',
            'you' => 'you'
        ]
    ]
];

$products = new RecursiveArrayIterator($products);
$products = new RecursiveTableBuilder($products,RecursiveIteratorIterator::SELF_FIRST);

?>

<table>
    <thead>
        <th>123</th>
    </thead>
    <?php
        foreach ($products as $parentOption => $childOption){
            if ($products->callHasChildren()){
                echo "<td>$parentOption";
            } else {
                echo "<td>$childOption</td>\n";
            }
        }
    ?>
</table>


<style>
    table, td, tr, th {
        border: 1px solid;
    }
</style>