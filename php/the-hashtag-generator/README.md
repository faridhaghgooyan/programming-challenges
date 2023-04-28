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

It's all about algorithms. An algorithm is a step-by-step procedure used to solve a problem or perform a computation. This challenge involves using a simple algorithm to determine the relationship between numbers and Roman numerals.

## :sparkles: Simplification ##

As always, I have separated this challenge into different parts. In the first part, I create a list based on Roman units, tens, hundreds, and thousands.

```bash
# roman numeral list
$roman_unit = ['','I','II','III','IV','V','VI','VII','VIII','IX'];
$roman_tens = ['','X','XX','XXX','XL','L','LX','LXX','LXXX','XC'];
$roman_hundreds = ['','C','CC','CCC','CD','D','DC','DCC','DCCC','CM'];
$roman_thousands = ['','M','MM','MMM'];
```

In the next part, I break down the passed integer argument into units, tens, hundreds, and thousands using the floor() function.

```bash
# Assign the sum of the elements to the left and right sides of the current index to a variable.
$units = $number % 10;
$tens = floor($number / 10) % 10;
$hundreds = floor($number / 100) % 10;
$thousands = floor($number / 1000) % 10;
```

Then, I use the resulting values as array index. It's important to note that there is a limitation in this challenge: the integer argument cannot exceed 3999 due to the limitations of Roman numerals.
```bash
function RomanNumeralsEncoder(int $number) : string
{
    if($number < 1 || $number > 3999) return $number . ' is out of the rang.the correct range is between 1 to 3999';
    $roman_unit = ['','I','II','III','IV','V','VI','VII','VIII','IX'];
    $roman_tens = ['','X','XX','XXX','XL','L','LX','LXX','LXXX','XC'];
    $roman_hundreds = ['','C','CC','CCC','CD','D','DC','DCC','DCCC','CM'];
    $roman_thousands = ['','M','MM','MMM'];
    
    $units = $number % 10;
    $tens = floor($number / 10) % 10;
    $hundreds = floor($number / 100) % 10;
    $thousands = floor($number / 1000) % 10;
    return $roman_thousands[$thousands] . $roman_hundreds[$hundreds] . $roman_tens[$tens] . $roman_unit[$units];
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
