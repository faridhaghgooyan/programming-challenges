<div align="center" id="top"> 
  <img src="./.github/app.gif" alt="Equal Sides Of An Array" />

  &#xa0;

  <!-- <a href="https://php_skillup.netlify.app">Demo</a> -->
</div>

<h1 align="center">Equal Sides Of An Array</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/faridhaghgooyan/programming-challenges?color=56BEB8">

  <!-- <img alt="Github issues" src="https://img.shields.io/github/issues/faridhaghgooyan/programming-challenges?color=56BEB8" /> -->

  <!-- <img alt="Github forks" src="https://img.shields.io/github/forks/faridhaghgooyan/programming-challenges?color=56BEB8" /> -->

  <!-- <img alt="Github stars" src="https://img.shields.io/github/stars/faridhaghgooyan/programming-challenges?color=56BEB8" /> -->
</p>

<!-- Status -->

<!-- <h4 align="center"> 
	🚧  Php_skillup 🚀 Under construction...  🚧
</h4> 

<hr> -->

<p align="center">
  <a href="#dart-about">Goal</a> &#xa0; | &#xa0; 
  <a href="#sparkles-features">Simplification</a> &#xa0; | &#xa0;
  <a href="#rocket-technologies">Technologies</a> &#xa0; | &#xa0;
  <a href="#white_check_mark-requirements">Requirements</a> &#xa0; | &#xa0;
  <a href="#checkered_flag-starting">Starting</a> &#xa0; | &#xa0;
  <a href="#memo-license">License</a> &#xa0; | &#xa0;
  <a href="https://github.com/{{YOUR_GITHUB_USERNAME}}" target="_blank">Author</a>
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



## :sparkles: Features ##

:heavy_check_mark: Feature 1;\
:heavy_check_mark: Feature 2;\
:heavy_check_mark: Feature 3;

## :rocket: Technologies ##

The following tools were used in this project:

- [Expo](https://expo.io/)
- [Node.js](https://nodejs.org/en/)
- [React](https://pt-br.reactjs.org/)
- [React Native](https://reactnative.dev/)
- [TypeScript](https://www.typescriptlang.org/)

## :white_check_mark: Requirements ##

Before starting :checkered_flag:, you need to have [Git](https://git-scm.com) and [Node](https://nodejs.org/en/) installed.

## :checkered_flag: Starting ##

```bash
# Clone this project
$ git clone https://github.com/{{YOUR_GITHUB_USERNAME}}/php_skillup

# Access
$ cd php_skillup

# Install dependencies
$ yarn

# Run the project
$ yarn start

# The server will initialize in the <http://localhost:3000>
```

## :memo: License ##

This project is under license from MIT. For more details, see the [LICENSE](LICENSE.md) file.


Made with :heart: by <a href="https://github.com/{{YOUR_GITHUB_USERNAME}}" target="_blank">{{YOUR_NAME}}</a>

&#xa0;

<a href="#top">Back to top</a>
