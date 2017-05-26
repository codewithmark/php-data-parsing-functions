# PHP Data Parsing Functions

You can use the below functions for parsing your php data

**Size**
> We loved with a love that was more than love
  function size($collection)
  {
      $get_data_type = gettype($collection);

      if($get_data_type == 'string' || $get_data_type == 'integer')
      {
          return strlen($collection);
      }
      else if($get_data_type == 'array')
      {
          return count($collection);
      }
  }



