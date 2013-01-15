<?php
//============================================================+
// File name   : tcpdf_config.php
// Begin       : 2004-06-11
// Last Update : 2011-04-15
//
// Description : Configuration file for TCPDF.
// Author      : Nicola Asuni - Tecnick.com LTD - Manor Coach House, Church Hill, Aldershot, Hants, GU12 4RQ, UK - www.tecnick.com - info@tecnick.com
// License     : GNU-LGPL v3 (http://www.gnu.org/copyleft/lesser.html)
// -------------------------------------------------------------------
// Copyright (C) 2004-2012  Nicola Asuni - Tecnick.com LTD
//
// This file is part of TCPDF software library.
//
// TCPDF is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// TCPDF is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with TCPDF.  If not, see <http://www.gnu.org/licenses/>.
//
// See LICENSE.TXT file for more information.
//============================================================+

/**
 * Configuration file for TCPDF.
 * @author Nicola Asuni
 * @package com.tecnick.tcpdf
 * @version 4.9.005
 * @since 2004-10-27
 */


	/**
	 * page format
	 */
	defined('PDF_PAGE_FORMAT') ? define ('PDF_PAGE_FORMAT', 'A4');

	/**
	 * page orientation (P=portrait, L=landscape)
	 */
	defined('PDF_PAGE_ORIENTATION') ? define ('PDF_PAGE_ORIENTATION', 'P');

	/**
	 * document creator
	 */
	defined('PDF_CREATOR') ? define ('PDF_CREATOR', 'TCPDF');

	/**
	 * document author
	 */
	defined('PDF_AUTHOR') ? define ('PDF_AUTHOR', 'TCPDF');

	/**
	 * header title
	 */
	defined('PDF_HEADER_TITLE') ? define ('PDF_HEADER_TITLE', 'TCPDF Example');

	/**
	 * header description string
	 */
	defined('PDF_HEADER_STRING') ? define ('PDF_HEADER_STRING', "by Nicola Asuni - Tecnick.com\nwww.tcpdf.org");

	/**
	 * image logo
	 */
	defined('PDF_HEADER_LOGO') ? define ('PDF_HEADER_LOGO', 'tcpdf_logo.jpg');

	/**
	 * header logo image width [mm]
	 */
	defined('PDF_HEADER_LOGO_WIDTH') ? define ('PDF_HEADER_LOGO_WIDTH', 30);

	/**
	 *  document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch]
	 */
	defined('PDF_UNIT') ? define ('PDF_UNIT', 'mm');

	/**
	 * header margin
	 */
	defined('PDF_MARGIN_HEADER') ? define ('PDF_MARGIN_HEADER', 5);

	/**
	 * footer margin
	 */
	defined('PDF_MARGIN_FOOTER') ? define ('PDF_MARGIN_FOOTER', 10);

	/**
	 * top margin
	 */
	defined('PDF_MARGIN_TOP') ? define ('PDF_MARGIN_TOP', 27);

	/**
	 * bottom margin
	 */
	defined('PDF_MARGIN_BOTTOM') ? define ('PDF_MARGIN_BOTTOM', 25);

	/**
	 * left margin
	 */
	defined('PDF_MARGIN_LEFT') ? define ('PDF_MARGIN_LEFT', 15);

	/**
	 * right margin
	 */
	defined('PDF_MARGIN_RIGHT') ? define ('PDF_MARGIN_RIGHT', 15);

	/**
	 * default main font name
	 */
	defined('PDF_FONT_NAME_MAIN') ? define ('PDF_FONT_NAME_MAIN', 'helvetica');

	/**
	 * default main font size
	 */
	defined('PDF_FONT_SIZE_MAIN') ? define ('PDF_FONT_SIZE_MAIN', 10);

	/**
	 * default data font name
	 */
	defined('PDF_FONT_NAME_DATA') ? define ('PDF_FONT_NAME_DATA', 'helvetica');

	/**
	 * default data font size
	 */
	defined('PDF_FONT_SIZE_DATA') ? define ('PDF_FONT_SIZE_DATA', 8);

	/**
	 * default monospaced font name
	 */
	defined('PDF_FONT_MONOSPACED') ? define ('PDF_FONT_MONOSPACED', 'courier');

	/**
	 * ratio used to adjust the conversion of pixels to user units
	 */
	defined('PDF_IMAGE_SCALE_RATIO') ? define ('PDF_IMAGE_SCALE_RATIO', 1.25);

	/**
	 * magnification factor for titles
	 */
	defined('HEAD_MAGNIFICATION') ? define('HEAD_MAGNIFICATION', 1.1);

	/**
	 * height of cell respect font height
	 */
	defined('K_CELL_HEIGHT_RATIO') ? define('K_CELL_HEIGHT_RATIO', 1.25);

	/**
	 * title magnification respect main font size
	 */
	defined('K_TITLE_MAGNIFICATION') ? define('K_TITLE_MAGNIFICATION', 1.3);

	/**
	 * reduction factor for small font
	 */
	defined('K_SMALL_RATIO') ? define('K_SMALL_RATIO', 2/3);

	/**
	 * set to true to enable the special procedure used to avoid the overlappind of symbols on Thai language
	 */
	defined('K_THAI_TOPCHARS') ? define('K_THAI_TOPCHARS', true);

	/**
	 * if true allows to call TCPDF methods using HTML syntax
	 * IMPORTANT: For security reason, disable this feature if you are printing user HTML content.
	 */
	defined('K_TCPDF_CALLS_IN_HTML') ? define('K_TCPDF_CALLS_IN_HTML', true);

//============================================================+
// END OF FILE
//============================================================+
