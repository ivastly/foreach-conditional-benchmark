# foreach-conditional-benchmark

## Rationale
PHP Inspections (EA Extended) plugin for PHPStorm warns noble developer about "avoiding callables
in loop conditionals for better performance". Here is the independent benchmark. 

## Run it

```bash
composer require phpbench/phpbench
vendor/bin/phpbench run LoopConditionalBench.php --report=aggregate
```

# Result

## `count()` call in a loop makes the execution ≈ 2.5x slower:
![result](https://raw.githubusercontent.com/ivastly/loop-conditional-benchmark/master/result.jpg)
