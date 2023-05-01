<h1 align="center">Human Readable Time</h1>

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

I believe that Norman Soetbeer is trying to teach us about the modulo operator and working with time. Although it may seem simple but it can be challenging for beginners.

## :sparkles: Simplification ##

Do you know how many seconds are in an hour? Yes, 3600 seconds. So that means dividing the number of seconds by 3600 gives us the number of hours. I use the floor() function to round down the fraction and get the remainder because I need reminders for minutes and seconds.

```bash
floor($seconds / 3600)
```

So now that we've calculated the number of hours, we can find the remaining seconds by subtracting the number of hours multiplied by 3600 (the number of seconds in an hour) from the total number of seconds. To get the remaining minutes, we can use the modulo operator (%) to find the remainder when dividing by 60, and then divide that result by 60.

```bash
floor(($seconds % 3600) / 60)
```

and the easy part is calculating how many seconds are left.

```bash
$seconds % 60
```

Have you heard of the sprintf() function? You can use it to format the output of hours, minutes, and seconds. For the seconds part, you can pass the values as second arguments and use the formatted string as the first parameter of the function.

```bash
sprintf(
            "%02d:%02d:%02d", 
            floor($seconds / 3600), // to hours
            floor(($seconds % 3600) / 60), // to minutes
            $seconds % 60 // seconds
        )
```
If you write this code, CodeWars will accept it, but in this case, the author expected a non-negative integer for the 'seconds' variable, so you have to write a condition to check for this.
```bash
function human_readable(int $seconds) : string
{
    return $seconds >= 0 ? sprintf(
            "%02d:%02d:%02d", 
            floor($seconds / 3600), // to hours
            floor(($seconds % 3600) / 60), // to minutes
            $seconds % 60 // seconds
        ) : 'Seconds integer is negative!';
}
```

## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By Norman Soetbeer
- [Author Profile](https://www.codewars.com/users/BattleRattle)
- [Challenge Link](https://www.codewars.com/kata/52685f7382004e774f0001f7/php)


<a href="#top">Back to top</a>
