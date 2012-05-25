<?php
$data = array(
  0 => array(
    'id' => 12451,
    'name' => 'Shiner 102',
    'brewery' => 526,
    'description' => 'Lone Star Approved!',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  1 => array(
    'id' => 23551,
    'name' => '512 Pecan Porter',
    'brewery' => 126,
    'description' => 'A bit nutty',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  2 => array(
    'id' => 35351,
    'name' => 'Brooklyn Lager',
    'brewery' => 226,
    'description' => 'New York City?',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  3 => array(
    'id' => 12451,
    'name' => 'Shiner 102',
    'brewery' => 526,
    'description' => 'Lone Star Approved!',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  4 => array(
    'id' => 23551,
    'name' => '512 Pecan Porter',
    'brewery' => 126,
    'description' => 'A bit nutty',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  5 => array(
    'id' => 35351,
    'name' => 'Brooklyn Lager',
    'brewery' => 226,
    'description' => 'New York City?',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  6 => array(
    'id' => 12451,
    'name' => 'Shiner 102',
    'brewery' => 526,
    'description' => 'Lone Star Approved!',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  7 => array(
    'id' => 23551,
    'name' => '512 Pecan Porter',
    'brewery' => 126,
    'description' => 'A bit nutty',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  8 => array(
    'id' => 35351,
    'name' => 'Brooklyn Lager',
    'brewery' => 226,
    'description' => 'New York City?',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  9 => array(
    'id' => 12451,
    'name' => 'Shiner 102 10',
    'brewery' => 526,
    'description' => 'Lone Star Approved!',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  10 => array(
    'id' => 23551,
    'name' => '512 Pecan Porter 11',
    'brewery' => 126,
    'description' => 'A bit nutty',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  11 => array(
    'id' => 35351,
    'name' => 'Brooklyn Lager 12',
    'brewery' => 226,
    'description' => 'New York City?',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  12 => array(
    'id' => 12451,
    'name' => 'Shiner 102 13',
    'brewery' => 526,
    'description' => 'Lone Star Approved!',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  13 => array(
    'id' => 23551,
    'name' => '512 Pecan Porter 14',
    'brewery' => 126,
    'description' => 'A bit nutty',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
  14 => array(
    'id' => 35351,
    'name' => 'Brooklyn Lager 15',
    'brewery' => 226,
    'description' => 'New York City?',
    'created' => '2011-06-11T05:36:45+00:00'
  ),
);
$page = (int) $_GET['page'] ?: 1;
$perPage = 10;
$resultOffset = ($page * $perPage) - $perPage;
$it = new ArrayIterator($data);
// If the offset is greater than the data an exception is thrown "OutOfBoundsException"
try{
  foreach(new LimitIterator($it, $resultOffset, $perPage) AS $result) {
    echo "{$result['name']} <br>";
  }
} catch (OutOfBoundsException $e) {
  echo 'No Records Found';
} catch (Exception $e) {
  echo $e->getMessage();
}