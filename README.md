# foreach-conditional-benchmark

## Rationale
PHP Inspections (EA Extended) plugin for PHPStorm warns noble developer about "avoiding callables
in loop conditionals for better performance". Here is the independent benchmark. 

## Run it

```bash
composer require phpbench/phpbench
vendor/bin/phpbench run LoopConditionalBench.php --report=aggregate
```

# Results
