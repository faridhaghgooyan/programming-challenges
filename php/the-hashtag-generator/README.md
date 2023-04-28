<h1 align="center">The Hashtag Generator</h1>

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

This challenge is all about strings, as you will be dealing with them throughout different parts of your application. Like other data types, strings have numerous built-in functions that you need to be familiar with. In this challenge, you will have the opportunity to work with various string functions.

## :sparkles: Simplification ##

In this challenge, your task is to capitalize each word of a string. The function ucwords is the solution to achieving this.

```bash
# convert the first letter of a string to uppercase
ucwords( $str )
```

Now, your next task is to remove all spaces from the string. This can easily be done using the str_replace function.

```bash
# remove all spaces from a string
str_replace( ' ', '', ucwords( $str ) )
```

The function must return false under two conditions. First, if the length of the $str is zero (i.e., empty). Second, if the length of the final result (i.e., # + $str) is greater than 140 characters. In other words, if the length of the given $str is more than 140 characters, the function should also return false.
```bash
function generateHashtag(string $str) 
{
    $result = str_replace( ' ', '', ucwords( $str ) );
    if( empty( $result ) || strlen( $result ) >= 140 ) return false;
    return '#' . $result;
}

```

## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By AKJ.IO 
- [Author Profile](https://www.codewars.com/users/AKJ.IO)
- [Challenge Link](https://www.codewars.com/kata/52449b062fb80683ec000024/train/php)


<a href="#top">Back to top</a>
