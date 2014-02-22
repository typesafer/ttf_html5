
<style>.crud_list{border:1px solid pink;background-color:beige; margin-bottom:10px;}</style><?php
$main_array = array(
    "foo" => "bar",
    "barw"    => "21",
	"bara"    => "22",
	"barq"    => "25",
    "multix" => array(
         "1" => array(
             "x1" => "food",
			 "x2" => "dr",
			 "x3" => "ch",
			 "x4" => "ju"
         ),
		"2" => array(
             "x1" => "food",
			 "x2" => "dr",
			 "x3" => "ch",
			 "x4" => "ju"
         )),
	"893" => "et",
	"563" => "op",
	"hd8" => "hjs",
	"multiv" => array(
					),
	"tw" => "bar",
	"qa" => "bar",
	"op" => "bar"
);

/**
Chunk the array into 4 parts
Make array keys with rand 
The other array keys with set keys
-----------------------------------------------
Read the cloned arrays to a jquery powered div
-----------------------------------------------
*/
$kr_one = Array
(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "cr_one" => Array
        (
            "0" => 123,
            "1" => 124,
            "2" => 125,
            "3" => 126,
            "4" => 127,
            "5" => 128,
            "6" => 129,
            "7" => 130,
        ),

    "six" => 6,
    "seven" => 7,
    "eight" => 8,
    "kr_one" => Array
        (
            "0" => 'one',
            "1" => 'two',
            "2" => 'three',
            "3" => 'four',
            "4" => 'five',
            "5" => 'six',
            "6" => 'seven',
            "7" => 'eight',
        ),
    "ten" => 10,
    "eleven" => 11,
    "twelve" => 12
);
 $the_posted = array_chunk($kr_one['kr_one'], 4);	
 
$all_array_keys = array_keys($the_posted);

foreach ( $all_array_keys as $k=>$v )
{   
  $new_key = 'kr_'.uniqid();
  $new_posted[$new_key] = $the_posted[$v];
  unset($the_posted[$k]);
}
$main_array['multiv'] =  $main_array['multiv'] + $new_posted;
  echo '<pre>';
  print_r($all_array_keys);
  echo "<hr/>";
  print_r($new_posted);
  echo "<hr/>";
    print_r($main_array);
  echo '<pre>';
   
  foreach($main_array['multiv'] as $key=>$value){
  echo  "<article class='crud_list'>";
  foreach($value as $k=>$v){
  echo "
  <input type='hidden' name='$key' />
<input type='text' name='$k' value='$v' /><br/>
<input type='checkbox' name='$k' value='$v' /><br/>
<input type='radio' name='$k' value='$v' /><br/>
<select><option>$k</option></select><br/>
";
  }
  echo "</article>";
  }
  


?>

