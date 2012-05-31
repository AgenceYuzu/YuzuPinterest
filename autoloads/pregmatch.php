<?php

class PregmatchOperator
{

	function PregmatchOperator()
	{
		$this->Operators = array('pregmatch');
	}

	function &operatorList()
	{
		return $this->Operators;
	}

	function namedParameterPerOperator()
	{
		return true;
	}

	function namedParameterList()
	{
		return array( 'pregmatch' => array( 'pattern' => array( 'type' => 'string',
                                                                    'required' => true,
                                                                    'default' => 'default text' ),
											'content' => array( 'type' => 'string',
																	'required' => false,
																	'default' => 0 ) ));
	}

	function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters, $placement )
	{
		//$firstParam = $namedParameters['pattern'];

		// Exemple de code. Ce code doit être modifié pour faire ce que l'opérateur doit faire. Il ne supprime que les caractères non imprimables pour le moment.
//		switch ( $operatorName )
//		{
//			case 'pregmatch':
//			{
//				//$operatorValue='Hello'.$namedParameters['pattern'];
//					$operatorValue= preg_match( $namedParameters['pattern'], $namedParameters['content'] );
//			} break;
//		}

		if ($operatorName == 'pregmatch')
		{
			$operatorValue = $this->pregmatch($namedParameters['pattern'], $namedParameters['content']);
		}
	}

function pregmatch( $pattern, $content )
	{
		preg_match( $pattern, $content, $matches );
		return $matches;
	}

	var $Operators;
}

?>