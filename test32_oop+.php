<?php

class A{

	function b( $obj, $obj2 ){
		$this->c = new Class(); // Композиция (new Class создан и живет только в данном классе )
		$this->d[] = $obj; //( $obj создан за пределами класса и живет сам по себе) - Агрегация
		$obj2->foo(); // Ассоциация
	}

}



/*======================================================================*/


/*===== Singleton ======================================================*/

/*======================================================================*/


/*===== Singleton ==============================================================================*/

/*==============================================================================================*/



?>