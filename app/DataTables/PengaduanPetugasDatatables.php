<?php

namespace App\DataTables;

use App\App\PengaduanPetugasDatatable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PengaduanPetugasDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', 'pengaduanpetugasdatatables.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\PengaduanPetugasDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PengaduanPetugasDatatable $model)
    {
        return $model->newQuery()->with('masyarakat');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('pengaduanpetugasdatatables-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'), 
            Column::make('masyarakat_nik'), 
            Column::make('judul_laporan'), 
            Column::make('isi_laporan'), 
            Column::make('foto'), 
            Column::make('action'), 
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'PengaduanPetugasDatatables_' . date('YmdHis');
    }
}
