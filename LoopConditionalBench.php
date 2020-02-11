<?php declare(strict_types=1);

namespace Ivastly\ForeachConditionalBenchmark;

/**
 * @Revs(10000)
 * @Iterations(3)
 * @Warmup(1)
 * @BeforeMethods({"init"})
 */
class LoopConditionalBench
{
	private $array;

	private $size;

	public function init($params): void
	{
		$size        = $params['size'];
		$this->size  = $size;
		$this->array = array_fill(0, $size, 1);
	}

	public function provideArraySize(): array
	{
		return [
			['size' => 100],
			['size' => 1000],
			['size' => 10000],
			['size' => 100000],
			['size' => 1000000],
		];
	}

	 /**
     * @ParamProviders({"provideArraySize"})
     */
	public function benchConstantCondition(): void
	{
		for ($i = 0; $i < $this->size; ++$i)
		{
			// intentionally empty
		}
	}

	/**
     * @ParamProviders({"provideArraySize"})
     */
	public function benchCountCallInCondition(): void
	{
		for ($i = 0; $i < count($this->array); ++$i)
		{
			// intentionally empty
		}
	}
}
