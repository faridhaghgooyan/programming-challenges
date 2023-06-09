<div align="center" id="top"> 
  <img src="./.github/app.gif" alt="Equal Sides Of An Array" />

  &#xa0;

  <!-- <a href="https://php_skillup.netlify.app">Demo</a> -->
</div>

<h1 align="center">Equal Sides Of An Array</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/faridhaghgooyan/programming-challenges?label=PHP&color=56BEB8&language=php">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/faridhaghgooyan/programming-challenges?color=56BEB8">

  <!-- <img alt="Github issues" src="https://img.shields.io/github/issues/faridhaghgooyan/programming-challenges?color=56BEB8" /> -->

  <!-- <img alt="Github forks" src="https://img.shields.io/github/forks/faridhaghgooyan/programming-challenges?color=56BEB8" /> -->

  <img alt="Github stars" src="https://img.shields.io/github/stars/faridhaghgooyan/programming-challenges?color=56BEB8" />
</p>


<p align="center">
  <a href="#dart-goal">Goal</a> &#xa0; | &#xa0; 
  <a href="#sparkles-simplification">Simplification</a> &#xa0; | &#xa0;
  <a href="#rocket-technologies">Technologies</a> &#xa0; | &#xa0;
  <a href="#memo-Sources">Sources</a> 
</p>

<br>

## :dart: Goal ##

Arrays are one of the most commonly used data types in programming languages and are a type of linear data structure. Therefore, it is essential to know how to work with arrays. Each programming language has different functions for dealing with arrays. In this challenge, you will become familiar with and work with the functions array_sum and array_slice. To complete this challenge, you must access each array index and determine whether the sum of the elements to the left and right of this specific index is the same or not.

## :sparkles: Simplification ##

As always, I separate these challenges into different parts. In the first part, I try to access each array index, so a loop is the answer. while and foreach loop could also be used, I prefer the classic 'for' loop.

```bash
# For loop
for( $i = 0 ; $i < count($arr) ; $i++ ){
    
}
```

In the next part, I calculate the sum of the left and right elements of the array. Instead of directly comparing the return value of array_sum, I prefer to assign it to a variable for readability purposes.

```bash
# Assign the sum of the elements to the left and right sides of the current index to a variable.
$left = array_sum(array_slice($arr, 0, $i));
$right = array_sum(array_slice($arr, $i + 1));
```

 Finally, I apply one more condition. In the first loop, the left side of the index is empty, but in this challenge, it has to mean 0.
```bash
function find_even_index(array $arr) : int
{
    for( $i = 0 ; $i < count($arr) ; $i++ ){
        $left = array_sum(array_slice($arr, 0, $i));
        $right = array_sum(array_slice($arr, $i + 1));
        if($left == $right) return $i;
    }
    return '-1';
}

```

## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By Shivo 
- [Author Profile](https://www.codewars.com/users/Shivo)
- [Challenge Link](https://www.codewars.com/kata/5679aa472b8f57fb8c000047)


<a href="#top">Back to top</a>
