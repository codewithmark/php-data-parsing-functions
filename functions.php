<?php

//--->size > start
/*
	This function will find the size of: string, integer and array
*/
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
//--->size > end



//--->find > start
/*
	This function will find an array from a list of arrays
*/
function find($collection,$find_val = array())
{	 
	if(size($find_val) >0 )
	{ 			
		foreach($find_val as $k1=>$v1)
		{
			foreach($collection as $k2=>$v2)
			{ 
				if( $v2[$k1] == $v1 ) 
				{
					$a[]=$v2;
				}
			}
		}
		return $a;		
	}
}
//--->find > end
