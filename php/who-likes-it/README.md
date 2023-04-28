<h1 align="center">Who likes it?</h1>

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

This challenge aimed to test your knowledge of string and array functions, while also pushing you to demonstrate your problem-solving techniques. There are many ways to approach this challenge, but it requires finding a solution that strikes a balance between readability, scalability, and other important factors. Ultimately, the goal is to choose a solution that is both clever and effective.

## :sparkles: Simplification ##

Are you familliar with tic-tac-toe? when you are a in a situation that you can have more than one scenario. usually if-else,switch or match will be used. because of challenge test limitation I can't use match ( it set and test on PHP 7), so I use switch approach. I use switch base on array count.

```bash
switch ( count( $names ) )
```

There is four situation that you have to dealing with them.

```bash
# remove all spaces from a string
str_replace( ' ', '', ucwords( $str ) )
```

Situation 1: if $names is empty!

```bash

    case 0:
            return 'no one likes this';

```

Situation 2: if $names count is equal to 1

```bash

    case 1:
            return $names[0] . ' likes this';

```

Situation 3: if $names count is equal to 2

```bash

    case 2:
            return $names[0] . ' and '.$names[1].' like this';

```

Situation 4: if $names count is equal to 3

```bash

    case 3:
            return $names[0].', '.$names[1].' and '.$names[2].' like this';

```

Situation 5: if $names count is more than or equal to 4

```bash

default:
            return $names[0]. ', '.$names[1].' and '.(count($names) - 2).' others like this';

```
Finally:
```bash
function likes( array $names ) : string
{
    switch ( count( $names ) ) {
        case 0:
            return 'no one likes this';
            break;
        case 1:
            return $names[0] . ' likes this';
            break;
        case 2:
            return $names[0] . ' and '.$names[1].' like this';
            break;
        case 3:
            return $names[0].', '.$names[1].' and '.$names[2].' like this';
            break;
        default:
            return $names[0]. ', '.$names[1].' and '.(count($names) - 2).' others like this';
    };
}

```
## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By BattleRattle
- [Author Profile](https://www.codewars.com/users/BattleRattle)
- [Challenge Link](https://www.codewars.com/kata/52449b062fb80683ec000024/train/php)


<a href="#top">Back to top</a>
