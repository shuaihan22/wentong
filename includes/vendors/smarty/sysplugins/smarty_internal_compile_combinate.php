<?php
/**
 * Smarty Internal Plugin Compile Combinate
 *
 * Compiles the {combinate} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Combinate Class
 *
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Combinate extends Smarty_Internal_CompileBase {
	/**
	 * Attribute definition: Overwrites base class.
	 *
	 * @var array
	 * @see Smarty_Internal_CompileBase
	 */
	public $shorttag_order = array ('type' );
	/**
	 * Attribute definition: Overwrites base class.
	 *
	 * @var array
	 * @see Smarty_Internal_CompileBase
	 */
	public $optional_attributes = array ('type');
	/**
	 * Compiles code for the {combinate} tag
	 *
	 * @param array $args
	 *        	array with attributes from parser
	 * @param object $compiler
	 *        	compiler object
	 * @return string compiled code
	 */
	public function compile($args, $compiler) {
		// check and get attributes
		$_attr = $this->getAttributes ( $compiler, $args );
		
		$buffer = isset ( $_attr ['type'] ) ? $_attr ['type'] : "'js'";		
		$compiler->_capture_stack [0] [] = array ($buffer,$compiler->nocache );
		// maybe nocache because of nocache variables
		$compiler->nocache = $compiler->nocache | $compiler->tag_nocache;
		$_output = "<?php \$_smarty_tpl->_capture_stack[0][] = array($buffer); ob_start(); ?>";
		
		return $_output;
	}
}

/**
 * Smarty Internal Plugin Compile Captureclose Class
 *
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_CombinateClose extends Smarty_Internal_CompileBase {
	/**
	 * Compiles code for the {/combinate} tag
	 *
	 * @param array $args
	 *        	array with attributes from parser
	 * @param object $compiler
	 *        	compiler object
	 * @return string compiled code
	 */
	public function compile($args, $compiler) {
		// check and get attributes
		$_attr = $this->getAttributes ( $compiler, $args );
		// must endblock be nocache?
		if ($compiler->nocache) {
			$compiler->tag_nocache = true;
		}
		
		list ( $buffer, $compiler->nocache ) = array_pop ( $compiler->_capture_stack [0] );
		
		$_output = "<?php list(\$_capture_buffer) = array_pop(\$_smarty_tpl->_capture_stack[0]);\n";
		$_output .= "if (!empty(\$_capture_buffer)) {\n";
		$_output .= "echo(combinate_resources(ob_get_clean(),\$_capture_buffer));\n";
		$_output .= "}?>";
		return $_output;
	}
}
