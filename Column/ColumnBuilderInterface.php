<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Column;

/**
 * Interface ColumnBuilderInterface
 *
 * @package Sg\DatatablesBundle\Column
 */
interface ColumnBuilderInterface
{
    /**
     * Add a Column.
     *
     * @param string $name    The name of the column in the entity
     * @param string $id      The id of the column class
     * @param array  $options The column options
     *
     * @return $this
     */
    public function add($name, $id, array $options = array());

    /**
     * Get all columns.
     *
     * @return array
     */
    public function getColumns();
} 