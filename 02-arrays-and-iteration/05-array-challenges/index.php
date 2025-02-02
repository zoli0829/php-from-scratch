<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);
$amount = count($numbers);
echo "<h3>Sum Of the $amount numbers is: $sum</h3>";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
array_push($colors, "purple", "orange");
$colors[1] = "pink";
// or we can use splice
//array_splice($colors, 1, 1, "pink");
array_pop($colors);

print_r($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$listings = [
  [
    "id" => 1,
    "job_title" => "Web Developer",
    "company" => "ABC Company",
    "contact_email" => "john@apple.com",
    "skills" => ["PHP", "MySQL", "JavaScript", "HTML", "CSS"]
  ],
  [
    "id" => 2,
    "job_title" => "PHP Developer",
    "company" => "ABC Company",
    "contact_email" => "jane@apple.com",
    "skills" => ["Photoshop", "CSS"]
  ],
  [
    "id" => 3,
    "job_title" => "Web Designer",
    "company" => "AB2C Company",
    "contact_email" => "456@apple.com",
    "skills" => ["PHP", "HTML", "CSS"]
  ],
];

array_push($listings, [
  "id" => 4,
  "job_title" => "IOS Developer",
  "company" => "ABC2 Company",
  "contact_email" => "john2@apple.com",
  "skills" => ["PHP", "MySQL", "HTML", "CSS"]
]);

//print_r($listings);
//echo $listings[1]["job_title"];
echo $listings[2]["skills"][0];
