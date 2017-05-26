# PHP Data Parsing Functions

You can use the below functions for parsing your php data

## Size

<br>
<p>Get the length of an array or string </p>

**Size of a string**
<pre>

$d1 = size('codewithmark');

echo "size of : codewithmark > " . $d1;
//out put
size of : codewithmark > 12

echo "size of : 123 > " . size(123);
//out put
size of : 123 > 3

</pre>

  
**Size of an array**
<br>
This will count the total number of objects in an array
<pre>
$a1 = array('term_id' => 5, 'taxonomy' => 'category', 'count' => 3);
 
echo "size > " .size( $a1);

//out put
size > 3
</pre>
<p>This will be useful to determine if your result query has any records or not</p>
  
## Find
From a list of array find an array with particular object
  <pre>
  //data array
  $a1 = 
  Array(
      Array
    (
      'term_taxonomy_id' => 5,
      'term_id' => 5,
      'taxonomy' => 'tumblog',
      'description' => '',
      'parent' => 0,
      'count' => 0,
    ),
    Array
    (
      'term_taxonomy_id' => 1,
      'term_id' => 1,
      'taxonomy' => 'category',
      'description' => '',
      'parent' => 0,
      'count' => 2, 
    ),

    Array
    (
      'term_taxonomy_id' => 3,
      'term_id' => 3,
      'taxonomy' => 'category',
      'description' => '',
      'parent' => 0,
      'count' => 0,  
    ),

    Array
    (
      'term_taxonomy_id' => 4,
      'term_id' => 4,
      'taxonomy' => 'category',
      'description' => '',
      'parent' => 0,
      'count' => 2,   
    ),

    Array
    (
      'term_taxonomy_id' => 2,
      'term_id' => 2,
      'taxonomy' => 'nav_menu',
      'description' => '',
      'parent' => 0,
      'count' => 3,    
    )
  );
  
  $d3 = find ($a1, array('term_id' => 5));
  
  print_r($d3);
  
  //out put
  (
      [0] => Array
          (
              [term_taxonomy_id] => 5
              [term_id] => 5
              [taxonomy] => tumblog
              [description] => 
              [parent] => 0
              [count] => 0
          )

  )
  </pre>
  
 Search for  multiple differert objects
<pre>
  $f1 =  array('term_id' => 5, 'taxonomy' => 'category', 'count' => 3);
  
  //$a1 is being called from above
  $d3 = find ($a1, $f1);

  print_r($d3);
  
  //out put
  (
    [0] => Array
        (
            [term_taxonomy_id] => 5
            [term_id] => 5
            [taxonomy] => tumblog
            [description] => 
            [parent] => 0
            [count] => 0
        )

    [1] => Array
        (
            [term_taxonomy_id] => 1
            [term_id] => 1
            [taxonomy] => category
            [description] => 
            [parent] => 0
            [count] => 2
        )

    [2] => Array
        (
            [term_taxonomy_id] => 3
            [term_id] => 3
            [taxonomy] => category
            [description] => 
            [parent] => 0
            [count] => 0
        )

    [3] => Array
        (
            [term_taxonomy_id] => 4
            [term_id] => 4
            [taxonomy] => category
            [description] => 
            [parent] => 0
            [count] => 2
        )

    [4] => Array
        (
            [term_taxonomy_id] => 2
            [term_id] => 2
            [taxonomy] => nav_menu
            [description] => 
            [parent] => 0
            [count] => 3
        )

  )

  
  
  </pre>
