<?php

namespace App\DataTables;

use App\Models\Payment;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PaymentDataTable extends DataTable
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
          ->addColumn('name', function (Payment $payment) {
              return '<a href="' . route('payment.show', $payment->id) .'">' . $payment->name . '</a>';
          })
          ->addColumn('action', function (Payment $payment) {
              return '<a href="' . route('payment.edit', $payment->id) .'" class="btn btn-outline-secondary btn-sm">Ред.</a><a href="' . route('payment.delete', $payment->id) .'" class="btn btn-outline-danger btn-sm">уд.</a>';
          });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Payment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Payment $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('payment-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                     ->language(['url' => url('/vendor/datatables/lang/ru.json')])
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
            ->width(100)
            ->addClass('text-center'),
          Column::make('id')->title('№'),
          //Column::make('name')->title('Клиент'),
          Column::computed('invoice_id')
            ->exportable(false)
            ->printable(false)
            ->width(150)
            ->addClass('text-center'),
          Column::make('invoice_id')->title('Счет'),
          Column::make('client_id')->title('Источник'),
          Column::make('amount')->title('Всего ₽'),
          Column::make('payment_date')->title('Дата оплаты'),
          Column::make('is_deleted')->title('Статус Удален?'),
          //Column::make('created_at')->title('Создан'),
          //Column::make('updated_at')->title('Был обновлен'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Payment_' . date('YmdHis');
    }
}
