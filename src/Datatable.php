<?php

namespace Anam\DatatableFlavour;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Support\Htmlable;

class Datatable
{
    protected $request;

    public function __construct()
    {
        $this->request = request();
    }

    public function orderColumnClass($column, $direction = 'asc'): string
    {
        $class = 'sorting';
        if ($this->request->input('sort-by') == $column) {
            $class .= '_' . $this->request->input('sort-direction', $direction);
        }
        return $class;
    }

    public function pagination(LengthAwarePaginator $paginator, $except = 'page'): Htmlable
    {
        return $paginator->appends($this->request->except($except))->links();
    }

    public function showingResult(LengthAwarePaginator $paginator): string
    {
        return "Showing {$paginator->firstItem()} to {$paginator->lastItem()} of {$paginator->total()} entries";
    }
}
