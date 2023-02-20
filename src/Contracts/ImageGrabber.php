<?php
/**
 * Image grabber contract.
 *
 * Defines a contract for a class that grabs an image.
 *
 * @package   HybridCarbon
 * @link      https://github.com/themehybrid/hybrid-carbon
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Carbon\Contracts;

/**
 * Image grabber interface.
 *
 * @since  1.0.0
 * @access public
 */
interface ImageGrabber {

	/**
	 * Builds or finds an image object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return ImageGrabber
	 */
	public function make();

	/**
	 * Returns an object implementing the `Image` contract.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return Image
	 */
	public function image();

	/**
	 * Returns a specific option or `false` if the option doesn't exist.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return mixed
	 */
	public function option( $name );
}
