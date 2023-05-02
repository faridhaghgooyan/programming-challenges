<h1 align="center">Is your period late?</h1>

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

The goal of the challenge is to work with the Date and Time Object. If you check the DateTime class, you will find that many useful methods exist in this class, including the diff() method. I believe that this challenge will help you work with and better understand the DateTime class.

## :sparkles: Simplification ##

This challenge doesn't require further simplification because the main goal is to find the difference in days between the last period and today, and compare it with the $cycleLength variable. If the result is greater than $cycleLength, the period is considered late, and the function should return true; otherwise, it should return false.

```bash
function periodIsLate($last, $today, $cycleLength) : bool
{
    return $last->diff($today)->days > $cycleLength;
}
```


## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By 0xcc 0xcc 0xcc 0xcc 
- [Author Profile](https://www.codewars.com/users/int3_0xcc)
- [Challenge Link](https://www.codewars.com/kata/578a8a01e9fd1549e50001f1/php)


<a href="#top">Back to top</a>
