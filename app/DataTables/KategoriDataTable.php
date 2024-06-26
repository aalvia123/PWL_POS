<?php

namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('kategori_nama', function($kategori) {
                return $kategori->nama; // Sesuaikan dengan atribut yang sesuai di model
            })
            ->addColumn('actions', function($kategori) {
                return '
                <a href="' . route('kategori.update', ['id'=> $kategori->kategori_id]) . '" class="btn btn-primary mr-2">
                    <i class="fa fa-pencil-alt" style="color: white; font-size: 12px;"></i>
                </a>
                <form method="POST" action="' . route('kategori.delete', ['id' => $kategori->kategori_id]) . '" onsubmit="return confirm(\'Apakah kamu yakin ingin menghapus data ini ?\')">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="btn btn-danger mr-2">
                        <i class="fa fa-trash" style="color: white; font-size: 12px;"></i>
                    </button>
                </form>';
            })
            ->rawColumns(['actions'])
            ->setRowId('id');
    }





    /**
     * Get the query source of dataTable.
     */
    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }
    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('kategori-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
    /*         Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'), */
            Column::make('kategori_id'),
            Column::make('kategori_kode'),
            Column::make('kategori_nama'),
            Column::make('created_at'),
            Column::make('updated_at'),
            column::computed('actions')
                ->exportable(false)
                ->printable(false)
                ->width(100)
                ->addClass('text-center')
        ];
    }



    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Kategori_' . date('YmdHis');
    }
}


