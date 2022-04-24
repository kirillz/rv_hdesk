<?php

namespace App\DataTables;


use App\Models\Client;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ClientDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query): \Yajra\DataTables\DataTableAbstract
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'client.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Client $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Client $model): \Illuminate\Database\Eloquent\Builder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): \Yajra\DataTables\Html\Builder
    {
        return $this->builder()
                    ->setTableId('client-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->language(['url' => url('/vendor/datatables/lang/ru.json')])
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
    protected function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id')->title('№'),
            Column::make('email')->title('Почта'),
            Column::make('city')->title('Город'),
            Column::make('address1')->title('Адрес 1'),
            Column::make('address2')->title('Адрес 2'),
            Column::make('state')->title('Регион'),
            Column::make('postal_code')->title('Индекс'),
            //Column::make('created_at')->title('Создан'),
            //Column::make('updated_at')->title('Был обновлен'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Client_' . date('YmdHis');
    }
}
