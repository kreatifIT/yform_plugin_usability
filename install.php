<?php
/**
 * This file is part of the yform/usability package.
 *
 * @author Friends Of REDAXO
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yform\usability;


\rex_sql_table::get(\rex::getTable('yform_table'))->ensureColumn(new \rex_sql_column('list_amount', 'bigint'))->alter();
