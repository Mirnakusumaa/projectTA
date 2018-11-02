<?php

namespace App\DataTables;

use App\Barang;
use Yajra\DataTables\Services\DataTable;

class DataTablesBarang extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return $this->datatables
            ->eloquent($this->query())
            ->make(true);
        
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Barang $model)
    {
        $query = $model->newQuery();
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id_barang',
            'nama_barang'=>[
                'title' =>'Nama Barang',
            ],
            'jml_stok',
            'berat',
            'harga_eceran',
            'harga_grosir',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'DataTablesBarang_' . date('YmdHis');
    }
}
