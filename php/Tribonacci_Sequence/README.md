<h1 align="center">Tribonacci Sequence</h1>

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

Once again arrays, always arrays and loops combine together just like a close friends. You have to summing the last 3 indexes (numbers) of the sequence. You see, It's actually easy to find a solution. In this challenge I belive that author try to teach us concept of shifting the sequence by changing the starting input, and how this affects the resulting sequence.

## :sparkles: Simplification ##

It is worth noting that there exist several strategies to tackle this problem. However, I find the following solution particularly elegant and legible. In each loop, we sum the last three indexes (numbers) and push them to the 'numbers', also known as the '$signature' variable.

```bash
 for($i=0; $i < $n; $i++){
      $signature[] = array_sum( array_slice( $signature , $i , 3 ) );
  }
```

We can use the 'array_slice' function to access specific indexes of an array. By passing '$i' as the second parameter and '3' as the third parameter, we can always access the last three indexes in each loop. Finally, we return the updated '$signature' array with its new members added.

```bash
function tribonacci(array $signature, int $n) : array
{
    for($i=0; $i < $n; $i++){
        $signature[] = array_sum( array_slice( $signature , $i , 3 ) );
    }
    return array_slice($signature , 0 , $n);
}
```


## :rocket: Technologies ##

The following tools were used in this project:

- [PHP](https://www.php.net/)



## :memo: Sources ##

- Challenge By Giacomo Sorbi 
- [Author Profile](https://www.codewars.com/users/GiacomoSorbi)
- [Challenge Link](https://www.codewars.com/kata/556deca17c58da83c00002db/solutions/php)


<a href="#top">Back to top</a>
