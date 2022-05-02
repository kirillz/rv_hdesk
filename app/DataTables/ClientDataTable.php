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
    public function dataTable($query)
    {
          return datatables()
            ->eloquent($query)
            ->rawColumns(['action', 'name'])
            ->addColumn('name', function(Client $client){
              return '<a href="' . route('client.show' , $client->id) .'">' . $client->name . '</a>';
            })
            ->addColumn('action', function(Client $client){
                return '<a href="' . route('client.edit' , $client->id) .'" class="btn btn-outline-secondary btn-sm">Ред.</a><a href="' . route('client.delete' , $client->id) .'" class="btn btn-outline-danger btn-sm">уд.</a>';
            });
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
            // FIXME: Название организ,	ФИО, Эл. почта,	Дата создания, К оплате

            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
            Column::make('id')->title('№'),
            //Column::make('name')->title('Клиент'),
            Column::computed('name')
              ->exportable(false)
              ->printable(false)
              ->width(150)
              ->addClass('text-center'),
            Column::make('email')->title('Почта'),
            Column::make('address1')->title('Адрес 1'),
            Column::make('state')->title('Регион'),
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
