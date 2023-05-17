<h1 align="center">Josephus Permutation</h1>

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

The goal of the Josephus Challenge is to simulate the elimination of items from an array based on a given offset, resulting in a new array of survivors. By applying the Josephus algorithm, each item is removed from the original array at a specific index determined by the offset. The process continues until all items have been eliminated, and the remaining items form the resulting array of survivors. The algorithm ensures an efficient and predictable elimination pattern, providing a fascinating insight into mathematical problem-solving.

## :sparkles: Simplification ##

The Josephus Challenge eliminates items from an array based on a given offset. Here's a simplified explanation of each line:

- Initialize an empty array to store the survivors.
- Get the total count of items in the array.
- Set the initial index to 0.
- While there are still items remaining:
  - Calculate the new index by adding the offset and subtracting 1. If it exceeds the total items, wrap around to the beginning.
  - Add the item at the calculated index to the survivors array.
  - Remove the item from the original array.
  - Decrease the count of remaining items.
  - Return the resulting array of survivors.

The algorithm progresses through the array, eliminating items one by one based on the offset. It keeps track of the survivors and updates the array until all items have been processed, resulting in the final array of survivors.

```bash
function josephus(array $items, int $k) : array {
    $survivors = [];
    $n = count($items);
    $index = 0;
    while ($n > 0) {
        // Calculate the new index
        $index = ($index + $k - 1) % $n;
        // Add the item
        $survivors[] = $items[$index];
        // Remove the item
        array_splice($items, $index, 1);
        $n--;
    }
    return $survivors;
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
