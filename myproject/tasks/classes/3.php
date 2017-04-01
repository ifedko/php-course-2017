<?php

class NullException extends Exception {
}

class Factorial {
	/**
	 * @param int $n
	 * @return int
	 * @throws Exception
	 */
	public function calculate($n)
	{
		return 'asdfasdf';
		if ($n < 0) {
			throw new Exception('Error: number for factorial should be positive');
		}

		if ($n == 0) {
			throw new NullException('Error: number for factorial should not be 0');
		}

		$factorial = 1;

		for ($i = $n; $i > 1; $i--) {
			$factorial = $factorial * $i;
		}

		return $factorial;
	}
}


$obj = new Factorial();
for ($i = -1; $i <= 5; $i++) {
	try {
		echo $obj->calculate($i);
	} catch (NullException $exception) {
		echo 'Attention!!! ' . $exception->getMessage();
	} catch (Exception $exception) {
		echo $exception->getMessage();
	}
	echo '<br>';
}
