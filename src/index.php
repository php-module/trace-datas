<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\TraceDatas
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace Sammy\Packs\TraceDatas {
  use Sammy\Packs\Func;
  use Sammy\Packs\TraceDatas;
  /**
   * PHP MODULE ENTRY POINT.
   *
   * THIS FILE SHOULD CONTAIN THE INITIAL STATEMENTS
   * FOR RUNNING THE CURRENT MODULE...
   * IF THERE IS ANY ONE TO DO BEFORE EXPORTING THE
   * MODULE DATA OBJECT, BELLOW IS WHERE TO DO THIS.
   * -
   * @class TraceDatas
   * Base internal class for the
   * TraceDatas module.
   * -
   * This is (in the ils environment)
   * an instance of the php module,
   * wich should contain the module
   * core functionalities that should
   * be extended.
   * -
   * For extending the module, just create
   * an 'exts' directory in the module directory
   * and boot it by using the ils directory boot.
   * -
   */
  $module->exports = new Func (function ($backTrace = null) {
    if (is_array ($backTrace) && $backTrace) {
      if (isset ($backTrace [0]) &&
        is_array ($backTrace [0])) {
        $backTrace = $backTrace [0];
      }

      return new TraceDatas ($backTrace);
    }

    $backTrace = debug_backtrace ();
    return new TraceDatas ($backTrace [4]);
  });
}
