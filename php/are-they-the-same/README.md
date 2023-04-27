<h1 align="center">Are they the "same"?</h1>

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

Once again Say hello to Array. As said before Array is one the important data type in any programming language. In this challenge, Author try to learn you how compare two array? in addition you will be familliar with sqaure of a number.

## :sparkles: Simplification ##

As always, I have divided this challenge into various parts. In the first part, I will be checking for empty or null arguments.

```bash
# Looking for an empty argument
    if( is_null($a1) || is_null($a2) ) return false;
```

In the next part, I will ensure that the correct base and squared arrays are found, as the user may have sent a squared image as the first parameter. There are no specific conditions, but we need to ensure that the application works correctly even if the user changes the order of the arguments.

```bash
# Looking for base and squared array
$base = array_sum($a1) < array_sum($a2) ? $a1 : $a2;
$squared = array_sum($a2) > array_sum($a1) ? $a2 : $a1;
```

Afterward, I will equalize all indexes of the base array to improve the comparison with the squared array.
```bash
$baseSquared = array_map(function($x) {
    return $x * $x;
}, $base);
```
Using the sort function, I will sort the arrays in ascending order. This will make it easier to compare the two arrays.

```bash
function comp($a1, $a2) : bool
{
    // Looking for an empty argument
    if( is_null($a1) || is_null($a2) ) return false;
    // Looking for base and squared array
    $base = array_sum($a1) < array_sum($a2) ? $a1 : $a2;
    $squared = array_sum($a2) > array_sum($a1) ? $a2 : $a1;

    $baseSquared = array_map(function($x) {
        return $x * $x;
    }, $base);
    sort($baseSquared);
    sort($squared);
    return $baseSquared == $squared;
}
```


## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By g964 
- [Author Profile](https://www.codewars.com/users/g964)
- [Challenge Link](https://www.codewars.com/kata/550498447451fbbd7600041c/solutions/php)


<a href="#top">Back to top</a>
