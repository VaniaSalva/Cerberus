<?php

namespace KitLoong\MigrationsGenerator\Migration\Generator\Columns;

use KitLoong\MigrationsGenerator\Migration\Blueprint\Method;
use KitLoong\MigrationsGenerator\Schema\Models\Column;
use KitLoong\MigrationsGenerator\Schema\Models\Table;

class PresetValuesColumn implements ColumnTypeGenerator
{
    /**
     * @inheritDoc
     */
    public function generate(Table $table, Column $column): Method
    {
        return new Method($column->getType(), $column->getName(), $column->getPresetValues());
    }
}
