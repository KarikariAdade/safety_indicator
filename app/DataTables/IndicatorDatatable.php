<?php

namespace App\DataTables;

use App\Models\Indicator;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class IndicatorDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query){
                return '<div style="display: inline-flex;">
                        <a href="'.route('indicator.fetch', $query->id).'" class="btn btn-warning mr-2 text-white shadow btn-sm datatable_btn" id="updateBtn"><span class="fa fa-edit"></span></a>
                    <a href="'.route('indicator.delete', $query->id).'" class="btn btn-danger mr-2 text-white shadow btn-sm datatable_btn" id="deleteIndicator"><span class="fa fa-trash"></span></a>
                    </div>';
            })
            ->editColumn('created_at', function ($query) {
                return date('Y-m-d', strtotime($query->created_at));
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param Indicator $model
     * @return QueryBuilder
     */
    public function query()
    {
        $filter = request()->get('filter');

        $query = Indicator::query()->orderBy('id', 'desc');

        if (!empty($filter)){

            if ($filter === 'weekly'){
                $query = Indicator::query()->whereBetween('created_at', [now()->startofWeek(), now()->endOfWeek()]);

                return $this->applyScopes($query);
            }

            if ($filter === 'daily'){
                $query = Indicator::query()->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()]);

                return $this->applyScopes($query);
            }

            if ($filter === 'monthly'){
                $query = Indicator::query()->whereBetween('created_at', [now()->startOfMonth()->startOfDay(), now()->endOfMonth()->endOfDay()]);

                return $this->applyScopes($query);
            }

        }
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('dataTable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1);
//                    ->buttons(
//                        Button::make('create'),
//                        Button::make('export'),
//                        Button::make('print'),
//                        Button::make('reset'),
//                        Button::make('reload')
//                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('aifr')->title('All Injury Frequency Rate'),
            Column::make('trifr')->title('Total Recordable Injury Frequency Rate'),
            Column::make('ltirf')->title('Lost Time injury frequency Rate'),
            Column::make('lti')->title('Lost Time Injury'),
            Column::make('damage_free'),
            Column::make('created_at')->title('Day Recorded'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Indicator_' . date('YmdHis');
    }
}
